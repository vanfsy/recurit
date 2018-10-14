$(document).on('click', '.yamm .dropdown-menu', function(e) {
  e.stopPropagation();
});

$(function() {

  /* selectTag
  -----------------------------------------------------------------
   */
  var formUploadPreview, selectTag;
  selectTag = function() {
    var selectClass, tag, target;
    target = '[data-selecttag]';
    tag = '.c-tag';
    selectClass = 'is-select';
    $(target).each(function() {
      $(tag, this).on('click', function() {
        $(this).addClass(selectClass);
      });
    });
  };

  /* formUploadPreview
  -----------------------------------------------------------------
   */
  formUploadPreview = function() {
    var img_view, img_view_delete, target;
    target = '[data-upload]';
    img_view = 'c-form-upload-view';
    img_view_delete = 'c-form-upload-view-del';
    return $(target).each(function() {
      var el;
      el = $(this);
      return $('input[type="file"]', el).on('change', function() {
        var fileprop, filereader, find_img, img, img_del, view_box;
        fileprop = $(this).prop('files')[0];
        find_img = $(this).parent().find('img');
        filereader = new FileReader;
        view_box = el;
        if (find_img.length) {
          find_img.nextAll().remove();
          find_img.remove();
        }
        img = '<div class="' + img_view + '"><img alt="" class="img"><span class="' + img_view_delete + '"><i class="c-icon"></i><span>画像を削除する</span></span></div>';
        view_box.prepend(img);
        filereader.onload = function() {
          view_box.find('img').attr('src', filereader.result);
          img_del(view_box);
        };
        img_del = function(target) {
          target.find("." + img_view_delete).on('click', function() {
            var parentBox, self;
            self = $(this);
            parentBox = self.parent().parent().parent();
            setTimeout((function() {
              parentBox.find('input[type=file]').val('');
              parentBox.find('.' + img_view).remove();
            }), 0);
            return false;
          });
        };
        filereader.readAsDataURL(fileprop);
      });
    });
  };

  /* init
  -----------------------------------------------------------------
   */
  $(window).on('load', function() {
    selectTag();
    formUploadPreview();
  });
});
