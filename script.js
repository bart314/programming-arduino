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

// IMAGES
let modal = document.createElement('div')
modal.setAttribute('id','modal-window')
modal.setAttribute('class','modal')
modal.innerHTML = ` 
  <span class="close">&times;</span>
  <img class="modal-content" id="modal-image">
  <div id="caption"></div>
` 
document.body.appendChild(modal) 

document.querySelectorAll("img.image").forEach( (el,idx) => {
  el.setAttribute('title','Click to enlarge image')
  el.addEventListener ('click', (el) => {
      document.querySelector("#modal-image").src = el.target.currentSrc
      document.querySelector("#modal-image").setAttribute('title','Click to close')
      document.querySelector("#caption").innerHTML = el.target.alt
      modal.style.display = "block"
    })
})


modal.addEventListener('click', () => modal.style.display = "none" ) 
