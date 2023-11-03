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
    // helper: "clone",
    connectToSortable: ".ifw-editor-content-sortable",
    helper: function () {
      // let type = $(this).data('type'), colsQty;
      // self.component = ViWec.Components.get(type);
      // colsQty = self.component.cols;
      // return viWecTmpl('emtmpl-block', {type: type, colsQty: colsQty});
      return $("<div>", {
        class: "test",
        text: "New Item",
      }).css({
        height: "3rem",
        width: "100%",
        "background-color":"rgb(192, 192, 192);",
        border: "1px solid #666666",
        margin: "3px 0",
      });
    },
    start: function (e, ui) {
      ui.helper.addClass("item-is-dragging");
    },
    stop: function (e, ui) {
      //     ui.helper.handleRow();
      //     ui.helper.find('.emtmpl-column').each(function (i, _this) {
      //         $(_this).handleColumn();
      //     });
      ui.helper.removeClass("item-is-dragging");
      //     viWecChange = true;
    },
    // connectToSortable: viWecEditorArea
  });
  $(".ifw-editor-content-sortable").sortable({
    cursor: "move",
    placeholder: "ifw-placehoder",
    // handle: ".dashicons-move",
    cancel: "",
    cursorAt: { left: 40, top: 18 },
  });
});
