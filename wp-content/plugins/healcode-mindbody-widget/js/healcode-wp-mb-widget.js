function hcShortCodeModalContents(element) {
  var codes = jQuery(element).data('hc-codes');
  var editor = jQuery(element).data('editor');
  hcAddCodeContent(codes, editor);
  tb_show("Your MINDBODY Shortcodes", "#TB_inline?height=550&width=auto&inlineId=healcode-wp-shortcodes-content");
  hcResizeTb();
  jQuery(window).on('resize', hcResizeTb);
}

function hcAddCodeContent(codeArray, wpEditor) {
  var content = "<h3 >Click button to insert shortcode</h3>";
  if (jQuery.isEmptyObject(codeArray)) {
    content += "<div class=\"hc-shortcode-empty-contents\" style=\"width: 100%;\"><div style=\"color: green; line-height:2em; font-size: 2em;\">First you have to set up your shortcodes in settings</div></div>";
  } else {
    jQuery.each(codeArray, function(index, value) {
      content += "<div class=\"hc-shortcode-row\" style=\"width: 100%; border-bottom: 1px solid #E5E4E2\"><div style=\"width: 50%; display: inline-block;\"><div style=\"font-size: 1.1em;\">" + value.title + "</div></div><div style=\"width: 50%; display: inline-block;\" ><button style=\"font-size: 1.2em; line-height: 2em; margin: 10px auto; width: 100%; cursor: pointer;\" class=\"hc-insert-shortcode\" data-editor=" + wpEditor + " value=" + value.title + ">" + value.title + "</button></div></div>";
    })
  }
  jQuery('#healcode-wp-shortcodes-content').html(content);
}

function hcResizeTb() {
  var screenWidth = jQuery(window).width();
  jQuery(document).find('#TB_window').width(660).height(550).css({"margi‌​n-left": -((screenWidth - 660) / 2), "z-index": 160000 });
  jQuery(document).find('#TB_ajaxContent').height('490').css('width', '');
}

function hcShortCodeEditorInsertion(element) {
  var shortCode   = jQuery(element).val();
  var editorName  = jQuery(element).data('editor');
  var $editor     = jQuery('#' + editorName);
  hcGenerateShortCodeInsertEditor(shortCode, $editor, editorName);
}

function activeTinyMCE($wpEditor) {
  return $wpEditor.parents('.wp-editor-wrap').first().hasClass('tmce-active');
}

function hcGenerateShortCodeInsertEditor(shortCodeValue, $wpEditor, wpEditorName) {
  var fullShortCode = '[hc-hmw snippet="' + shortCodeValue + '"]';
  if (activeTinyMCE($wpEditor)) {
    tinyMCE.editors[wpEditorName].focus();
    tinyMCE.execCommand('mceInsertContent', false, fullShortCode);
  } else {
    var cursorPosition = $wpEditor[0].selectionStart;
    var textAreaTxt = $wpEditor.val();
    $wpEditor.val(textAreaTxt.substring(0, cursorPosition) + fullShortCode + textAreaTxt.substring(cursorPosition));
  }
  tb_remove();
}

jQuery(document).ready(function() {
  jQuery('body').on('click', '.button.hc-wp-media-button', function() {
    hcShortCodeModalContents(this);
  });

  jQuery('body').on('click', 'button.hc-insert-shortcode', function() {
    hcShortCodeEditorInsertion(this);
  });
});
