jQuery(document).ready(function () {
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 1) {
      jQuery('.page-title').addClass('sticky')
    } else {
      jQuery('.page-title').removeClass('sticky')
    }
  })
})

new Vue({
  el: '#searchField',
  methods: {},
  mounted() {
    console.log(this)
  },
})
