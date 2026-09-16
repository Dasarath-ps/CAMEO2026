
// Subtle reveal animations for sections as they enter the viewport.
document.body.classList.add('motion-ready');
const revealTargets = document.querySelectorAll('.section, .register-section, footer');
if ('IntersectionObserver' in window) {
  const revealObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.08 });
  revealTargets.forEach(el => revealObserver.observe(el));
} else {
  revealTargets.forEach(el => el.classList.add('is-visible'));
}

document.querySelectorAll('a[href^="#"]').forEach(a=>a.addEventListener('click',e=>{
  const el=document.querySelector(a.getAttribute('href'));
  if(el){e.preventDefault();el.scrollIntoView({behavior:'smooth'})}
}));

const form=document.getElementById('registrationForm');
const msg=document.getElementById('formMessage');
const teamSize=document.getElementById('teamSize');
const member3=document.getElementById('member3');
const member4=document.getElementById('member4');
const feeAmount=document.getElementById('feeAmount');
const paymentStep=document.getElementById('paymentStep');
const paymentTeamSize=document.getElementById('paymentTeamSize');
const paymentAmount=document.getElementById('paymentAmount');
const qrAmount=document.getElementById('qrAmount');
const paymentQr=document.getElementById('paymentQr');
const qrMissing=document.getElementById('qrMissing');
const paymentScreenshot=document.getElementById('paymentScreenshot');
const fileName=document.getElementById('fileName');
const uploadPaymentBtn=document.getElementById('uploadPaymentBtn');
const paymentMessage=document.getElementById('paymentMessage');
const backToDetailsBtn=document.getElementById('backToDetailsBtn');
const whatsappStep=document.getElementById('whatsappStep');

let currentRegistrationId=null;
let currentAmount=400;

function updateFee(){
  const size=parseInt(teamSize.value||'2',10);
  const amount=size*200;
  feeAmount.textContent=amount;
  paymentTeamSize.textContent=size;
  paymentAmount.textContent=amount;
  qrAmount.textContent=amount;

  member3.disabled=size<3;
  member3.required=size>=3;
  member3.placeholder=size>=3 ? 'Member 3 *' : 'Member 3 (optional)';
  if(size<3) member3.value='';

  member4.disabled=size<4;
  member4.required=size>=4;
  member4.placeholder=size>=4 ? 'Member 4 *' : 'Member 4 (optional)';
  if(size<4) member4.value='';
}

function setQr(amount){
  const supported=[400,600,800];
  if(!supported.includes(amount)){
    paymentQr.hidden=true;
    qrMissing.hidden=false;
    return;
  }
  paymentQr.hidden=false;
  qrMissing.hidden=true;
  paymentQr.src=`payment_qr/qr_${amount}.png`;
  paymentQr.alt=`Payment QR code for ₹${amount}`;
}

teamSize.addEventListener('change',updateFee);
updateFee();

function setStep(n){
  document.querySelectorAll('.registration-steps .step').forEach(s=>{
    s.classList.toggle('active',s.dataset.step===String(n));
  });
}

paymentQr.addEventListener('error',()=>{
  paymentQr.hidden=true;
  qrMissing.hidden=false;
});

form.addEventListener('submit',async e=>{
  e.preventDefault();
  
  const collegeConfirm = document.getElementById('collegeConfirm');
  if (collegeConfirm && collegeConfirm.value === 'Nirmala College') {
    return;
  }

  msg.textContent='Saving your details...';
  msg.style.color='#111';

  const payload=Object.fromEntries(new FormData(form));
  payload.team_size=parseInt(payload.team_size,10);

  try{
    const res=await fetch('api/register.php',{
      method:'POST',
      headers:{'Content-Type':'application/json'},
      body:JSON.stringify(payload)
    });
    const data=await res.json();

    if(!res.ok) throw new Error(data.message||'Could not save registration.');

    currentRegistrationId=data.registration_id;
    currentAmount=data.amount;

    paymentTeamSize.textContent=data.team_size;
    paymentAmount.textContent=data.amount;
    qrAmount.textContent=data.amount;
    setQr(data.amount);

    form.hidden=true;
    paymentStep.hidden=false;
    setStep(2);
    msg.textContent='';
    paymentMessage.textContent='';
    paymentScreenshot.value='';
    fileName.textContent='No file selected';
    paymentStep.scrollIntoView({behavior:'smooth',block:'start'});
  }catch(err){
    msg.textContent=err.message||'Unable to continue. Check PHP and MySQL.';
    msg.style.color='#111';
  }
});

paymentScreenshot.addEventListener('change',()=>{
  const file=paymentScreenshot.files[0];
  fileName.textContent=file ? file.name : 'No file selected';
});

uploadPaymentBtn.addEventListener('click',async()=>{
  const file=paymentScreenshot.files[0];
  if(!file){
    paymentMessage.textContent='Please choose your payment screenshot first.';
    return;
  }

  if(file.size>5*1024*1024){
    paymentMessage.textContent='Screenshot must be smaller than 5 MB.';
    return;
  }

  uploadPaymentBtn.disabled=true;
  uploadPaymentBtn.textContent='UPLOADING...';
  paymentMessage.textContent='';

  const formData=new FormData();
  formData.append('registration_id',currentRegistrationId);
  formData.append('payment_screenshot',file);

  try{
    const res=await fetch('api/upload_payment.php',{method:'POST',body:formData});
    const data=await res.json();

    if(!res.ok) throw new Error(data.message||'Upload failed.');

    paymentMessage.textContent='✓ Screenshot uploaded successfully. Your payment will be verified by the organizers.';
    paymentScreenshot.disabled=true;
    uploadPaymentBtn.textContent='SCREENSHOT UPLOADED ✓';

    // Final step: show the official WhatsApp group after payment proof is submitted.
    setTimeout(()=>{
      paymentStep.hidden=true;
      whatsappStep.hidden=false;
      whatsappStep.scrollIntoView({behavior:'smooth',block:'start'});
      document.querySelectorAll('.registration-steps .step').forEach(s=>s.classList.remove('active'));
    }, 500);
  }catch(err){
    paymentMessage.textContent=err.message||'Could not upload screenshot.';
    uploadPaymentBtn.disabled=false;
    uploadPaymentBtn.textContent='UPLOAD PAYMENT SCREENSHOT ↗';
  }
});

backToDetailsBtn.addEventListener('click',()=>{
  paymentStep.hidden=true;
  form.hidden=false;
  setStep(1);
  form.scrollIntoView({behavior:'smooth',block:'start'});
});
