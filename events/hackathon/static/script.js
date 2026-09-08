document.querySelectorAll('a[href^="#"]').forEach(a=>a.addEventListener('click',e=>{
  const el=document.querySelector(a.getAttribute('href'));
  if(el){e.preventDefault();el.scrollIntoView({behavior:'smooth'})}
}));

const form=document.getElementById('registrationForm');
const msg=document.getElementById('formMessage');

form.addEventListener('submit',async e=>{
  e.preventDefault();
  msg.textContent='Submitting...';
  msg.style.color = '';

  const payload = JSON.stringify(Object.fromEntries(new FormData(form)));

  try {
    let res;
    try {
      // Primary relative endpoint: works on both root domain and subfolder installations (e.g. XAMPP /nexyra/)
      res = await fetch('api/register.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: payload
      });
    } catch (_) {
      // Fallback to clean route
      res = await fetch('/api/register', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: payload
      });
    }

    const data = await res.json();
    msg.textContent = data.message || (res.ok ? 'Registration submitted!' : 'Something went wrong.');
    if (res.ok) {
      form.reset();
      msg.style.color = '#111';
    } else {
      msg.style.color = '#fff';
    }
  } catch(err) {
    msg.textContent = 'Backend is not running or MySQL is unreachable. Make sure PHP and MySQL are started.';
    msg.style.color = '#fff';
  }
});
