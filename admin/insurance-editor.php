<?php
defined('ABSPATH') || exit;
global $post;
?>
<br class="clear" />
<div>
    <div id="ifw-editor-container">
        <div id="ifw-control-panel">
            <div class="control-panel-fixed">
                <div class="ui three item stackable tabs menu">
                    <div class="item active" data-tab="components">Components</div>
                    <div class="item" data-tab="editor">Editor</div>
                    <div class="item" data-tab="custom-css">Custom CSS</div>
                </div>
                <div class="ui tab active" data-tab="components">
                    <div class="ui accordion tyled fluid">
                        <div class="title active">
                            <i class="dropdown icon"></i>
                            Layout
                        </div>
                        <div class="content active">
                            <!-- <div class="content-item item-section">
                                <div class="section"></div>
                                <span class="label">Section</span>
                            </div> -->
                            <ul class="layout-wrapper">
                                <li data-section="layout" class="layout">
                                    <div class="content-item column-1 layout-draggable" data-type="layout/grid1cols">
                                        <i class="ifw-icon-columns-1 columns-icon"></i>
                                        <div class="item-title">1 Column</div>
                                    </div>

                                </li>
                                <li data-section="layout" class="layout">
                                    <div class="content-item column-2 layout-draggable" data-type="layout/grid2cols">
                                        <i class="ifw-icon-columns-2 columns-icon"></i>
                                        <div class="item-title">2 columns</div>

                                </li>
                                <li data-section="layout" class="layout">
                                    <div class="content-item column-3 layout-draggable" data-type="layout/grid3cols">
                                        <i class="ifw-icon-columns-3 columns-icon"></i>
                                        <div class="item-title">3 Columns</div>
                                    </div>

                                </li>
                                <li data-section="layout" class="layout">
                                    <div class="content-item column-4 layout-draggable" data-type="layout/grid4cols">
                                        <i class="ifw-icon-columns-4 columns-icon"></i>
                                        <div class="item-title">4 Columns</div>
                                    </div>

                                </li>

                            </ul>
                        </div>
                        <div class="title active">
                            <i class="dropdown icon"></i>
                            Basic content
                        </div>
                        <div class="content active">
                            <ul class="layout-wrapper">
                                <li data-section="layout" class="layout">
                                    <div class="content-item column-1 layout-draggable" data-type="layout/grid1cols">
                                        <i class="ifw-icon-transfer columns-icon"></i>
                                        <div class="item-title">Defaut content</div>
                                    </div>

                                </li>
                                <li data-section="layout" class="layout">
                                    <div class="content-item column-2 layout-draggable" data-type="layout/grid2cols">
                                        <i class="ifw-icon-text columns-icon"></i>
                                        <div class="item-title">Text</div>

                                </li>
                                <li data-section="layout" class="layout">
                                    <div class="content-item column-3 layout-draggable" data-type="layout/grid3cols">
                                        <i class="ifw-icon-image columns-icon"></i>
                                        <div class="item-title">Image</div>
                                    </div>
                                </li>
                                <li data-section="layout" class="layout">
                                    <div class="content-item column-4 layout-draggable" data-type="layout/grid4cols">
                                        <i class="ifw-icon-button columns-icon"></i>
                                        <div class="item-title">Button</div>
                                    </div>

                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ui tab" data-tab="editor">
                    <label for="field-label">Label</label>
                    <input type="text" id="field-label" placeholder="Enter label here..">
                </div>
                <div class="ui tab" data-tab="custom-css">
                    <label for="custom-css-area">Custom css</label>
                    <textarea name="custom-css-area" id="custom-css-area" cols="38" rows="6"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div id="ifw-editor-content-wrapper">
        <div id="ifw-editor-content" class="ifw-editor-content-sortable ui-sortable">
            <div class="test">item 1</div>
            <div class="test">item 2</div>
            <div class="test">item 3</div>
            <div class="test">item 4</div>
            <div class="test">item 5</div>
        </div>
    </div>
</div>