var menuDisplay = document.getElementById('overview').style.display

// MENU
document.querySelectorAll('#hamburger img').forEach (el => el.addEventListener('click', evt => {
  console.log(evt)
  const overview = document.getElementById('overview')
  console.log(overview.style.display)
  overview.style.display = overview.style.display=='block' ? 'none' : 'block'
}))

document.getElementById('main').addEventListener('click', () => document.getElementById('overview').style.display=menuDisplay )
document.querySelectorAll('#hamburger a').forEach( el => el.addEventListener('click', () => {
  document.getElementById('overview').style.display = 'none';
}))