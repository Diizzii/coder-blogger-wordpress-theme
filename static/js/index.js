// Keywords Bar Carousel

let keywordIndex = 0

const carousel = () => {
  let i
  let x = document.getElementsByClassName('section-bar-keyword')
  for (i = 0; i < x.length; i++) {
    x[i].style.display = 'none'
  }
  keywordIndex++
  if (keywordIndex > x.length) {
    keywordIndex = 1
  }
  x[keywordIndex - 1].style.display = 'block'
  setTimeout(carousel, 3000)
}

carousel()
