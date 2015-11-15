iTabs = new Class({
  Extends: iRotater,
  options: {
    autoplay: false,
    onShowSlide: function (slideIndex) {
      this.tabs.removeClass('active');
      this.tabs[slideIndex].addClass('active');
    }
  },
  initialize: function (tabs, slides, options) {
    this.setOptions(options);
    this.tabs = $$(tabs);
    this.createTabs();
    if (this.options.hash && window.location.hash) {
      this.getHashIndex(options);
    }
    return this.parent(slides, options);
  },
  createTabs: function () {
    var that = this;
    this.tabs.forEach(function (tab, index) {
      tab.addEvent('click', function (event) {
        event.preventDefault();
        that.showSlide(index);
        that.stop(true);
      });
    });
  }.protect(),
  getHashIndex: function (options) {
    var hash = window.location.hash.substring(1);
    this.tabs.forEach(function (el, index) {
      if (el.get('id') == hash) {
        options.startIndex = index;
      }
    });
  }.protect()

});
