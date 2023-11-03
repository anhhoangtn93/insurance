jQuery(document).ready(function ($) {
  //Enable Editor Menu
  $(".menu .item").tab();
  //Enable accordion
  $(".ui.accordion").accordion({
    exclusive: false,
  });

  $(".layout-draggable").draggable({
    cursor: "move",
    cursorAt: { left: 40, top: 15 },
    helper: "clone",
    // helper: function () {
    //     let type = $(this).data('type'), colsQty;
    //     self.component = ViWec.Components.get(type);
    //     colsQty = self.component.cols;
    //     return viWecTmpl('emtmpl-block', {type: type, colsQty: colsQty});
    // },
    start: function (e, ui) {
        ui.helper.addClass('item-is-dragging');
    },
    stop: function (e, ui) {
    //     ui.helper.handleRow();
    //     ui.helper.find('.emtmpl-column').each(function (i, _this) {
    //         $(_this).handleColumn();
    //     });
        ui.helper.removeClass('item-is-dragging');
    //     viWecChange = true;
    },
    // connectToSortable: viWecEditorArea
  });
  $('.ifw-editor-content-sortable').sortable({
    cursor: 'move',
    // placeholder: 'emtmpl-placeholder',
    handle: '.dashicons-move',
    cancel: '',
    cursorAt: {left: 40, top: 18},
    start: function (e, ui) {
        // ui.placeholder.height(30);
        ui.helper.addClass('item-is-dragging');
    },
    stop: function (ev, ui) {
        ui.item.css({'width': 'auto', 'height': 'auto', 'z-index': 'unset'});
        // ui.item.find('.emtmpl-column-sortable').columnSortAble();
        ui.item.removeClass('item-is-dragging');
        viWecChange = true;
    }
});
});
