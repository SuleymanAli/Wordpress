jQuery(document).ready(function () {
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 1) {
      jQuery('.page-title').addClass('sticky')
    } else {
      jQuery('.page-title').removeClass('sticky')
    }
  })

  /* Search Functionality */
  new Vue({
    el: '#searchField',
    data: () => ({
      search: {
        toggle: false,
        input: '',
        debounce: null,
        loading: null,
      },
      results: [],
    }),
    methods: {
      openSearchField() {
        this.search.toggle = true
        this.$refs.search.focus()
      },
      closeSearchField() {
        this.search.toggle = false
      },
      onKeyPress(event) {
        if (this.search.toggle === false && event.keyCode == 27) {
          this.openSearchField()
        } else if (this.search.toggle && event.keyCode == 27) {
          this.closeSearchField()
        }
      },
      handleSearchInput(event) {
        // Clear Other Input Typings
        clearTimeout(this.search.debounce)
        // If Something Searching, Do Action
        if (this.search.input) {
          // Enable Loading
          this.search.loading = true
          // Reset Search Result
          this.results = []
          // Fire Request
          this.search.debounce = setTimeout(async () => {
            await this.searchRequest()
            this.search.loading = false
          }, 750)
        } else {
          // Else If Typing Delete, Reset Result(s)
          this.results = []
        }
      },
      searchRequest() {
        // Fetch And Store Data
        fetch(
          `http://localhost:8888/wordpress/wp-json/blog/v1/search?term=${this.search.input}`
        )
          .then((res) => res.json())
          .then((data) => (this.results = data))
      },
    },
    mounted() {
      document.addEventListener('keydown', this.onKeyPress)
    },
    destoyed() {
      document.removeEventListener('keydown', this.onKeyPress)
    },
  })
  console.log(document.getElementById('notes'))
  /* Notes */
  if (document.getElementById('notes').length > 0) {
    new Vue({
      el: '#notes',
      data: () => ({
        create: {
          title: null,
          content: null,
        },
      }),
      mounted() {
        fetch('http://localhost:8888/wordpress/wp-json/wp/v2/notes/', {
          method: 'GET',
          headers: {
            'X-WP-Nonce': themeData.nonce,
            'Content-Type': 'application/json',
          },
        })
          .then((res) => {
            return res.json()
          })
          .then((e) => console.log(e))
      },
      methods: {
        createNote() {
          if (!this.create.title) return
          fetch('http://localhost:8888/wordpress/wp-json/wp/v2/notes/', {
            method: 'POST',
            headers: {
              'X-WP-Nonce': themeData.nonce,
              'Content-Type': 'application/json',
            },
            body: JSON.stringify({
              title: this.create.title,
              content: this.create.content,
              status: 'private',
            }),
          })
            .then((res) => {
              return res.json()
            })
            .then((data) => console.log(data))
        },
        enableEditMode() {},
        updateNote(ID) {
          fetch('http://localhost:8888/wordpress/wp-json/wp/v2/notes/' + ID, {
            method: 'POST',
            headers: {
              'X-WP-Nonce': themeData.nonce,
              'Content-Type': 'application/json',
            },
            body: JSON.stringify({
              title: 'got4',
              content: 'lorem4',
              status: 'private',
            }),
          })
            .then((res) => {
              return res.json()
            })
            .then((data) => console.log(data))
        },
        deleteNoteByID(ID) {
          fetch('http://localhost:8888/wordpress/wp-json/wp/v2/notes/' + ID, {
            method: 'DELETE',
            headers: {
              'X-WP-Nonce': themeData.nonce,
            },
          })
            .then((res) => {
              return res.json()
            })
            .then((data) => console.log(data))
        },
      },
    })
  }
})
