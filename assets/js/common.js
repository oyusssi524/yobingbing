const fcForms = document.getElementById('fcForms');
const fcStickyForms = document.getElementById('fcStickyForms');
window.addEventListener('scroll', function(){
  const fcFormsTop = fcForms.getBoundingClientRect().top;
  const fcStickyFormsTop = fcStickyForms.getBoundingClientRect().top;
  if (fcFormsTop >= fcStickyFormsTop) {
    fcStickyForms.classList.remove('hidden');
  } else {
    fcStickyForms.classList.add('hidden');
  }
})


