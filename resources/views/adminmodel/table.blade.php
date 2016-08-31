<div class="table_container">
    <div class="box">
       <div class="results_header box-header">
            <h2 class="box-title" data-bind="text: modelTitle"></h2>

            <div class="actions" style="padding-right: 7px;">
                <!-- ko if: globalActions().length -->
                    <!-- ko foreach: globalActions -->
                        <!-- ko if: has_permission -->
                            <input type="button" data-bind="click: function(){$root.customAction(false, action_name, messages, confirmation)}, value: title,
                                                                            attr: {disabled: $root.freezeForm() || $root.freezeActions()}" />
                        <!-- /ko -->
                    <!-- /ko -->
                <!-- /ko -->
                <!-- ko if: actionPermissions.create -->
                    <a class="new_item btn btn-block btn-primary"
                        data-bind="attr: {href: base_url + modelName() + '/new'},
                                    text: '<?php echo trans('administrator::administrator.new') ?> ' + modelSingle()"></a>
                <!-- /ko -->
            </div>

            <div class="action_message" data-bind="css: { error: globalStatusMessageType() == 'error', success: globalStatusMessageType() == 'success' },
                                            notification: globalStatusMessage "></div>
        </div>

        <table class="table table-bordered table-striped" border="0" cellspacing="0" id="customers" cellpadding="0">
            <thead>
                <tr>
                    <!-- ko foreach: columns -->
                        <th data-bind="text: title"></th>
                    <!-- /ko -->
                </tr>
            </thead>
        </table>
    </div>

</div>

<div class="item_edit_container" data-bind="itemTransition: activeItem() !== null || loadingItem(), style: {width: expandWidth() + 'px'}">
    <div class="item_edit box box-primary" data-bind="template: 'itemFormTemplate', style: 'width: 100% !important;'"></div>
</div>
