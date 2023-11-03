<?php
defined('ABSPATH') || exit;
global $post;
?>
<br class="clear"/>
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
                            <ul>
                                <li data-section="layout">
                                    <div class="content-item column-1 layout-draggable">
                                        <div class="item-title">1 Column</div>
                                    </div>

                                </li>
                                <li data-section="layout">
                                    <div class="content-item column-2 layout-draggable">
                                        <div class="item-title">2 Column</div>
                                    </div>

                                </li>
                                <li data-section="layout">
                                    <div class="content-item column-3 layout-draggable">
                                        <div class="item-title">3 Column</div>
                                    </div>

                                </li>
                                <li data-section="layout">
                                    <div class="content-item column-4 layout-draggable">
                                        <div class="item-title">4 Column</div>
                                    </div>

                                </li>

                            </ul>
                        </div>
                        <div class="title active">
                            <i class="dropdown icon"></i>
                            Basic content
                        </div>
                        <div class="content active">
                            <p>There are many breeds of dogs. Each breed varies in size and temperament. Owners often select a breed of dog that they find to be compatible with their own lifestyle and desires from a companion.</p>
                        </div>
                    </div>
                </div>
                <div class="ui tab" data-tab="editor">
                    Tab 2
                </div>
                <div class="ui tab" data-tab="custom-css">
                    Tab 3
                </div>
            </div>
        </div>
    </div>
    <div id="ifw-editor-content-wrapper">
        <div id="ifw-editor-content" class="ifw-editor-content-sortable ui-sortable">
            content
        </div>
    </div>
</div>