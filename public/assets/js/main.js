const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 400,
    // reset: true
})

sr.reveal('#partners');
sr.reveal('#abt-content,#webinar',{origin: 'left'});
sr.reveal('#about,#expo',{origin: 'right'});

function comingsoon(){
    Swal.fire(
      'Coming Soon',
      'The Page you clicked is coming soon',
      'error'
    )
}
