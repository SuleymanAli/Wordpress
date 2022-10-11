<div id="searchField">
  <span class="searchIcon pl-2" @click="openSearchField">
    <i class="fas fa-search"></i>
  </span>
  <div class="searchOverlay position-fixed" :class="{'searchOverlay--active': search.toggle}">
    <input type="text" class="input" ref="search" placeholder="Search" @input="handleSearchInput"
      v-model="search.input">
    <div class="container mt-4">
      <span v-if="search.loading">Loading...</span>
      <div class="row">
        <div class="col-lg-12">
          <h2 v-if="results.page?.length > 0 || results.post?.length > 0">Results</h2>
          <h2 v-else-if="search.loading === false && (results.page?.length === 0 || results.post?.length === 0)">
            Resutl(s) Not Found</h2>
        </div>
        <div class="col-lg-6" v-if="results.page?.length > 0">
          <span v-if="results.page?.length > 0">Page(s):</span>
          <div v-for="(page, index) in results.page" :key="index">
            <a :href="page.guid">
              {{page.post_title}}
            </a>
            {{page.post_date.split(' ')[0]}}
          </div>
        </div>
        <div class="col-lg-6" v-if="results.post?.length > 0">
          <span>Post(s):</span>
          <div v-for="(post, index) in results.post" :key="index">
            <a :href="post.guid">
              {{post.post_title}}
            </a>
            {{post.post_date.split(' ')[0]}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="<?= AQUILA_DIR_URI . '/assets/js/vue.js' ?>"></script>
<script type="text/javascript" defer>
new Vue({
  el: '#searchField',
  data: () => ({
    search: {
      toggle: false,
      input: '',
      debounce: null,
      loading: null
    },
    results: []
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
      fetch(`http://localhost:8888/wordpress/wp-json/blog/v1/search?term=${this.search.input}`)
        .then(res => res.json())
        .then(data => this.results = data)
    }
  },
  mounted() {
    document.addEventListener('keydown', this.onKeyPress)
  },
  destoyed() {
    document.removeEventListener('keydown', this.onKeyPress)
  },
})
</script>

<style>
.searchIcon {
  top: 50%;
  right: 15px;
  transform: translateY(-50%);
  cursor: pointer;
}

.searchOverlay {
  background-color: rgba(255, 255, 255, .7);
  top: -100%;
  left: 0;
  width: 100vw;
  height: 100vh;
  z-index: 10;
  opacity: 0;
  transition: .3s all ease;
  transform: scale(.8, .8)
}

.searchOverlay--active {
  opacity: 1;
  top: 0;
  z-index: 10;
  background-color: rgba(255, 255, 255, .9);
  transform: scale(1, 1);
}

.searchOverlay .input {
  padding: 10px;
  width: 100%;
  height: 130px;
  border: 1px solid #eee;
  background-color: white !important;
  opacity: 1;
  font-size: 32px;
}
</style>