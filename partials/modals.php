<!-- Modal -->
<div class="modal fade modalbutton" id="ModalButton" tabindex="-1" role="dialog" aria-labelledby="ModalButtonTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Button Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10.557" height="10.555" viewBox="0 0 10.557 10.555">
                        <path id="ico-close" d="M17.815,16.566,21.585,12.8a.884.884,0,1,0-1.25-1.25l-3.771,3.771-3.771-3.771a.884.884,0,1,0-1.25,1.25l3.771,3.771-3.771,3.771a.884.884,0,0,0,1.25,1.25l3.771-3.771,3.771,3.771a.884.884,0,0,0,1.25-1.25Z" transform="translate(-11.285 -11.289)" fill="#b3b3b3"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label class="col-lg-12" for="textButton">Button text</label>
                        <input type="text" class="form-control" id="textButton" placeholder="Enter text button">
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-12" for="urlButton">Url</label>
                        <div class="col-lg-12">
                            <div class="input-group">
                                <input type="text" class="form-control" id="urlButton" placeholder="Enter url target">
                                <div class="input-group-append btn-shared d-none">
                                    <button class="btn btn-light btn-file_shared" type="button" data-toggle="get-files">
                                        <span class="text-btn">Search for a file</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <div>
                    <button type="button" class="btn btn-light" data-dismiss="modal">
                        <span class="text-btn-gray">Close</span>
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-primary modal-save">
                        <span class="text-btn">Save</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modalvideo" id="ModalVideo" tabindex="-1" role="dialog" aria-labelledby="ModalVideoTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Video URL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10.557" height="10.555" viewBox="0 0 10.557 10.555">
                        <path id="ico-close" d="M17.815,16.566,21.585,12.8a.884.884,0,1,0-1.25-1.25l-3.771,3.771-3.771-3.771a.884.884,0,1,0-1.25,1.25l3.771,3.771-3.771,3.771a.884.884,0,0,0,1.25,1.25l3.771-3.771,3.771,3.771a.884.884,0,0,0,1.25-1.25Z" transform="translate(-11.285 -11.289)" fill="#b3b3b3"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="urlVideo">Url</label>
                        <input type="text" class="form-control" id="urlVideo" placeholder="Enter url target">
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <div>
                    <button type="button" class="btn btn-light" data-dismiss="modal">
                        <span class="text-btn-gray">Close</span>
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-primary modal-save_video">
                        <span class="text-btn">Save</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modalcode modalCodeVS" id="ModalCodeVS" tabindex="-1" role="dialog" aria-labelledby="ModalButtonTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Code<span>.</span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10.557" height="10.555" viewBox="0 0 10.557 10.555">
                        <path id="ico-close" d="M17.815,16.566,21.585,12.8a.884.884,0,1,0-1.25-1.25l-3.771,3.771-3.771-3.771a.884.884,0,1,0-1.25,1.25l3.771,3.771-3.771,3.771a.884.884,0,0,0,1.25,1.25l3.771-3.771,3.771,3.771a.884.884,0,0,0,1.25-1.25Z" transform="translate(-11.285 -11.289)" fill="#b3b3b3"/>
                    </svg>
                </button>
                <pre class="codeSourceTemp">
                    <code id="codeSourceTemp"></code>
                </pre>
            </div>
            <div class="modal-body codeSource">
                <div class="editor__code" style="min-height: 94vh;">
                    <div id="editorCode" style="border:1px solid grey"></div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <div>
                    <button type="button" class="btn btn-light" data-dismiss="modal">
                        <span class="text-btn-gray">Close</span>
                    </button>
                </div>
                <div>
                    <button type="button" id="editorDownloadCode" class="btn btn-secondary br-color mr-1">
                        <span class="text-btn">Download html</span>
                    </button>
                    <button type="button" id="editorCopyClipboard" class="btn btn-secondary br-color mr-1">
                        <span class="text-btn">Copy code</span>
                    </button>
                    <button type="button" id="editorSaveCode" class="btn btn-primary">
                        <span class="text-btn">Save</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modalcode" id="ModalCode" tabindex="-1" role="dialog" aria-labelledby="ModalButtonTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Code</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10.557" height="10.555" viewBox="0 0 10.557 10.555">
                        <path id="ico-close" d="M17.815,16.566,21.585,12.8a.884.884,0,1,0-1.25-1.25l-3.771,3.771-3.771-3.771a.884.884,0,1,0-1.25,1.25l3.771,3.771-3.771,3.771a.884.884,0,0,0,1.25,1.25l3.771-3.771,3.771,3.771a.884.884,0,0,0,1.25-1.25Z" transform="translate(-11.285 -11.289)" fill="#b3b3b3"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body codeSource">
                <pre class="language-html line-numbers" >
                    <code id="codeSource" style="font-size: 0.7em;" class="language-html line-numbers"></code>
                </pre>
            </div>
            <div class="modal-footer justify-content-between">
                <div>
                    <button type="button" class="btn btn-light" data-dismiss="modal">
                        <span class="text-btn-gray">Close</span>
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-secondary br-color download-html mr-2">
                        <span class="text-btn">Download html</span>
                    </button>
                    <button type="button" class="btn btn-secondary br-color copy-code">
                        <span class="text-btn">Copy code</span>
                    </button>
                    <button type="button" class="btn btn-primary save-code">
                        <span class="text-btn">Save</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade modalrestore" id="ModalRestore" tabindex="-1" role="dialog" aria-labelledby="ModalButtonTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">View</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10.557" height="10.555" viewBox="0 0 10.557 10.555">
                        <path id="ico-close" d="M17.815,16.566,21.585,12.8a.884.884,0,1,0-1.25-1.25l-3.771,3.771-3.771-3.771a.884.884,0,1,0-1.25,1.25l3.771,3.771-3.771,3.771a.884.884,0,0,0,1.25,1.25l3.771-3.771,3.771,3.771a.884.884,0,0,0,1.25-1.25Z" transform="translate(-11.285 -11.289)" fill="#b3b3b3"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-between px-0 view-header">
                    <div class="col-6">
                        <p><b>Version:</b> <span class="version"></span></p>
                    </div>
                    <div class="col-6 text-right">
                        <p><b>Date:</b> <span class="date"></span></p>
                    </div>
                </div>
                <div class="view-email" data-spy="scroll">
                    
                </div>
                <div class="input-group form-group check-group mb-0 pt-3 px-3">
                    <label class="form-check mb-0">
                        <input class="form-check-input" type="checkbox" id="chk_replace_version">
                        <span class="form-check-label">I understand I will be replacing my existing email</span>
                    </label>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <div>
                    <button type="button" class="btn btn-light" data-dismiss="modal">
                        <span class="text-btn-gray">Close</span>
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-primary replace-version" disabled="disabled">
                        <span class="text-btn">Replace</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modalsample" id="ModalSample" tabindex="-1" role="dialog" aria-labelledby="ModalButtonTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">View</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10.557" height="10.555" viewBox="0 0 10.557 10.555">
                        <path id="ico-close" d="M17.815,16.566,21.585,12.8a.884.884,0,1,0-1.25-1.25l-3.771,3.771-3.771-3.771a.884.884,0,1,0-1.25,1.25l3.771,3.771-3.771,3.771a.884.884,0,0,0,1.25,1.25l3.771-3.771,3.771,3.771a.884.884,0,0,0,1.25-1.25Z" transform="translate(-11.285 -11.289)" fill="#b3b3b3"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-between px-0 view-header">
                    <div class="col-8">
                        <p><b>Title:</b> <span class="title"></span></p>
                    </div>
                </div>
                <div class="view-email" data-spy="scroll">
                    
                </div>
                <div class="input-group form-group check-group mb-0 pt-3 px-3">
                    <label class="form-check mb-0">
                        <input class="form-check-input" type="checkbox" id="chk_replace_sample">
                        <span class="form-check-label">I understand I will be replacing my existing email</span>
                    </label>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <div>
                    <button type="button" class="btn btn-light" data-dismiss="modal">
                        <span class="text-btn-gray">Close</span>
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-primary replace-sample" disabled="disabled">
                        <span class="text-btn">Replace</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modaltheme" id="ModalTheme" tabindex="-1" role="dialog" aria-labelledby="ModalButtonTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Theme & Branding</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10.557" height="10.555" viewBox="0 0 10.557 10.555">
                        <path id="ico-close" d="M17.815,16.566,21.585,12.8a.884.884,0,1,0-1.25-1.25l-3.771,3.771-3.771-3.771a.884.884,0,1,0-1.25,1.25l3.771,3.771-3.771,3.771a.884.884,0,0,0,1.25,1.25l3.771-3.771,3.771,3.771a.884.884,0,0,0,1.25-1.25Z" transform="translate(-11.285 -11.289)" fill="#b3b3b3"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-between mx-0">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed</p>
                </div>
                <div class="input-group form-group check-group mb-0 pt-3">
                    <label class="form-check mb-0">
                        <input class="form-check-input" type="checkbox" id="chk_replace_theme">
                        <span class="form-check-label">I understand I will be replacing my existing email</span>
                    </label>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <div>
                    <button type="button" class="btn btn-light" data-dismiss="modal">
                        <span class="text-btn-gray">Close</span>
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-primary replace-theme" disabled="disabled">
                        <span class="text-btn">Save</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modalRename" id="ModalRename" tabindex="-1" role="dialog" aria-labelledby="ModalRenameTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form onsubmit="return false;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Rename Email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10.557" height="10.555" viewBox="0 0 10.557 10.555">
                        <path id="ico-close" d="M17.815,16.566,21.585,12.8a.884.884,0,1,0-1.25-1.25l-3.771,3.771-3.771-3.771a.884.884,0,1,0-1.25,1.25l3.771,3.771-3.771,3.771a.884.884,0,0,0,1.25,1.25l3.771-3.771,3.771,3.771a.884.884,0,0,0,1.25-1.25Z" transform="translate(-11.285 -11.289)" fill="#b3b3b3"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                    <div class="form-group mb-0">
                        <!-- <label for="textButton">Button text</label> -->
                        <input type="text" class="form-control" id="textTitle" placeholder="Enter Title">
                        <small id="emailHelp" class="text-black-50">Note: When changing the name of the email, the feedback made will be lost.</small>
                    </div>
                    <span class="error error_rename-email">Error Mensaje</span>
            </div>
            <div class="modal-footer justify-content-between">
                <div>
                    <button type="button" class="btn btn-light" data-dismiss="modal">
                        <span class="text-btn-gray">Close</span>
                    </button>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary save-rename" disabled>
                        <span class="text-btn">Save</span>
                    </button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade modalMove" id="ModalMove" tabindex="-1" role="dialog" aria-labelledby="ModalMoveTitle" aria-hidden="true" data-client="<?php echo isset($client) ? $client : ''; ?>" data-initiative="<?php echo isset($initiative) ? $initiative:''; ?>">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Move item to</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10.557" height="10.555" viewBox="0 0 10.557 10.555">
                        <path id="ico-close" d="M17.815,16.566,21.585,12.8a.884.884,0,1,0-1.25-1.25l-3.771,3.771-3.771-3.771a.884.884,0,1,0-1.25,1.25l3.771,3.771-3.771,3.771a.884.884,0,0,0,1.25,1.25l3.771-3.771,3.771,3.771a.884.884,0,0,0,1.25-1.25Z" transform="translate(-11.285 -11.289)" fill="#b3b3b3"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group mb-0">
                        <label for="inputState">Client</label>
                        <select class="custom-select" id="client_move" data-default="<?php echo isset($client) ? $client : ''; ?>">
                            <option selected>- Clients Not Found -</option>
                        </select>
                    </div>
                    <div class="form-group mb-0">
                        <ul class="list-initiative" data-default="<?php echo isset($initiative) ? $initiative:''; ?>">
                            <!-- 
                                <li class="initiative-item active">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 18 15">
                                        <g id="categories" transform="translate(1 -6)">
                                            <path id="Trazado_2473" data-name="Trazado 2473" d="M19.25,10.25h-8.6L9.372,8.337A.75.75,0,0,0,8.75,8h-6A.75.75,0,0,0,2,8.75v13.5a.75.75,0,0,0,.75.75h16.5a.75.75,0,0,0,.75-.75V11A.75.75,0,0,0,19.25,10.25Z" transform="translate(-3 -2)" fill="#aeb2b9"/>
                                        </g>
                                    </svg>
                                    <span>Iniciativa</span>
                                </li>
                                <li class="initiative-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 18 15">
                                        <g id="categories" transform="translate(1 -6)">
                                            <path id="Trazado_2473" data-name="Trazado 2473" d="M19.25,10.25h-8.6L9.372,8.337A.75.75,0,0,0,8.75,8h-6A.75.75,0,0,0,2,8.75v13.5a.75.75,0,0,0,.75.75h16.5a.75.75,0,0,0,.75-.75V11A.75.75,0,0,0,19.25,10.25Z" transform="translate(-3 -2)" fill="#aeb2b9"/>
                                        </g>
                                    </svg>
                                    <span>Iniciativa2</span>
                                </li> 
                            -->
                        </ul>
                        <span class="error error_list-initiative">Error Mensaje</span>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <div>
                    <button type="button" class="btn btn-light" data-dismiss="modal">
                        <span class="text-btn-gray">Close</span>
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-primary move-initiative">
                        <span class="text-btn">Move</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modalInitiative" id="ModalCreateInitiative" tabindex="-1" role="dialog" aria-labelledby="ModalCreateTitle" aria-hidden="true" data-client="<?php echo isset($client) ? $client : ''; ?>" >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Create a initiative</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10.557" height="10.555" viewBox="0 0 10.557 10.555">
                        <path id="ico-close" d="M17.815,16.566,21.585,12.8a.884.884,0,1,0-1.25-1.25l-3.771,3.771-3.771-3.771a.884.884,0,1,0-1.25,1.25l3.771,3.771-3.771,3.771a.884.884,0,0,0,1.25,1.25l3.771-3.771,3.771,3.771a.884.884,0,0,0,1.25-1.25Z" transform="translate(-11.285 -11.289)" fill="#b3b3b3"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group mb-2">
                        <label for="inputState">Client</label>
                        <select class="custom-select" id="select_client" data-default="<?php echo isset($client) ? $client : ''; ?>" required>
                            <option selected>- Clients Not Found -</option>
                        </select>
                        <span class="error_select_client error">Mensaje de Error</span>
                    </div>
                    <div class="form-group mb-2">
                        <label for="inputState">Initiative Type</label>
                        <select class="custom-select" id="type_initiative" name="type_initiative" required>
                            <option value="" selected>- Select Initiative Type -</option>
                            <option>Product Launch</option>
                            <option>Training & Enablement</option>
                            <option>Demand Gen</option>
                            <option>Business Transformation</option>
                            <option>Reporting</option>
                            <option>Team Project</option>
                            <option>Other</option>
                        </select>
                        <span class="error_type_initiative error">Mensaje de Error</span>
                    </div>

                    <div class="form-group mb-2">
                        <label for="inputInitiative">Initiative</label>
                        <input type="text" class="form-control" id="initiative" placeholder="Enter name">
                        <span class="error_initiative error">Mensaje de Error</span>
                        <!-- <small id="emailHelp" class="text-black-50">Note: When changing the name of the email, the feedback made will be lost.</small> -->
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <div>
                    <button type="button" class="btn btn-light" data-dismiss="modal">
                        <span class="text-btn-gray">Close</span>
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-primary create-initiative">
                        <span class="text-btn">Create</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modalCreateEmail" id="ModalCreateEmail" tabindex="-1" role="dialog" aria-labelledby="ModalButtonTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10.557" height="10.555" viewBox="0 0 10.557 10.555">
                        <path id="ico-close" d="M17.815,16.566,21.585,12.8a.884.884,0,1,0-1.25-1.25l-3.771,3.771-3.771-3.771a.884.884,0,1,0-1.25,1.25l3.771,3.771-3.771,3.771a.884.884,0,0,0,1.25,1.25l3.771-3.771,3.771,3.771a.884.884,0,0,0,1.25-1.25Z" transform="translate(-11.285 -11.289)" fill="#b3b3b3"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body bodyCreateEmail">
                <div class="row justify-content-md-center h-100">
                    <div class="col-12 col-md-5 align-self-center">
                        <h5 class="modal-title" id="exampleModalLongTitle">Create a new email</h5>
                        <form>
                            <div class="form-group mb-2">
                                <label for="inputName">Enter a title</label>
                                <input type="text" class="form-control valuable" id="inputName" placeholder="Enter name" required>
                                <span class="error_inputName error">Mensaje de Error</span>
                            </div>
                            <div class="form-group mb-2">
                                <label for="inputClient">Client</label>
                                <select class="custom-select valuable" id="inputClient" data-toggle="drop-clients" data-default="<?php echo isset($client) ? $client : ''; ?>" required>
                                    <option selected>- Clients Not Found -</option>
                                </select>
                                <span class="error_inputClient error">Mensaje de Error</span>
                            </div>
                            <div class="form-group mb-2">
                                <label for="inputInitiative">Initiative</label>
                                <select class="custom-select valuable" id="inputInitiative" data-toggle="drop-initiatives" data-default="<?php echo isset($initiative) ? $initiative:''; ?>" required>
                                    <option selected>Select a client first...</option>
                                </select>
                                <span class="error_inputInitiative error">Mensaje de Error</span>
                            </div>

                            <div class="form-group mb-0">
                                <label for="inputType">Where would you like to start?</label>
                                <div class="row type-design" data-type="">
                                    <div class="col-lg-6 pb-4 type-new_email" data-value="template">    
                                        <div class="card card-sm" >        
                                            <div class="img-50">            
                                                <a role="button" class="d-block">                
                                                    <img src="./assets/images/template_based.svg" class="w-100">
                                                </a>        
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div>
                                                        <h6 class="title-card mb-2">Template based</h6>
                                                    </div>
                                                </div>
                                            </div>    
                                        </div>   
                                    </div>

                                    <div class="col-lg-6 pb-4 type-new_email" data-value="blank">    
                                        <div class="card card-sm" >        
                                            <div class="img-50">            
                                                <a role="button" class="d-block">                
                                                    <img src="./assets/images/template_blank.png" class="w-100">
                                                </a>        
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div>
                                                        <h6 class="title-card mb-2">Blank email</h6>
                                                    </div>
                                                </div>
                                            </div>    
                                        </div>   
                                    </div>  
                                </div>
                                <span class="error_inputType error">Mensaje de Error</span>
                            </div>
                            <hr class="mt-0">  
                            <div class="row justify-content-between">
                                <div class="col-6">
                                    <button type="button" class="btn btn-light" data-dismiss="modal">
                                        <span class="text-btn-gray">Close</span>
                                    </button>
                                </div>
                                <div class="col-6 text-right">
                                    <button type="button" class="btn btn-primary btn-create-email">
                                        <span class="text-btn">Create new email</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div>
                    <button type="button" class="btn btn-light" data-dismiss="modal">
                        <span class="text-btn-gray">Close</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modalTemplate" id="ModalChooseTemplate" tabindex="-1" role="dialog" aria-labelledby="ModalButtonTitle" aria-hidden="true" data-client="" data-initiative="" data-name="">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Choose a template</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10.557" height="10.555" viewBox="0 0 10.557 10.555">
                        <path id="ico-close" d="M17.815,16.566,21.585,12.8a.884.884,0,1,0-1.25-1.25l-3.771,3.771-3.771-3.771a.884.884,0,1,0-1.25,1.25l3.771,3.771-3.771,3.771a.884.884,0,0,0,1.25,1.25l3.771-3.771,3.771,3.771a.884.884,0,0,0,1.25-1.25Z" transform="translate(-11.285 -11.289)" fill="#b3b3b3"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="filters-box">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="inputCategory">Category</label>
                                <select class="custom-select" id="inputCategory" data-toggle="drop-category" required>
                                    <option selected>- Categories Not Found -</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="intputSearch">Search</label>
                                <input type="text" class="form-control" id="intputSearch" placeholder="Search">
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <section class="thumbnails-boxes px-1">
                    <div class="container-flui pb-5">
                        <div class="row no-result_templates justify-content-center">
                            <div class="col-12 col-lg-10 text-center py-5">
                                <h4 class="text-muted">No results found for your search</p>
                            </div>
                        </div>
                        <div class="template-list row">
                            
                        </div>
                    </div>
                </section>
                
            </div>
            <div class="modal-footer justify-content-between">
                <div>
                    <button type="button" class="btn btn-light" data-dismiss="modal">
                        <span class="text-btn-gray">Close</span>
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-create-template" disabled>
                        <span class="text-btn">Create</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modalPreview" id="modalPreview" tabindex="-1" role="dialog" aria-labelledby="ModalPreview" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Preview</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10.557" height="10.555" viewBox="0 0 10.557 10.555">
                        <path id="ico-close" d="M17.815,16.566,21.585,12.8a.884.884,0,1,0-1.25-1.25l-3.771,3.771-3.771-3.771a.884.884,0,1,0-1.25,1.25l3.771,3.771-3.771,3.771a.884.884,0,0,0,1.25,1.25l3.771-3.771,3.771,3.771a.884.884,0,0,0,1.25-1.25Z" transform="translate(-11.285 -11.289)" fill="#b3b3b3"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-email_modal">

                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <div>
                    <button type="button" class="btn btn-light" data-dismiss="modal">
                        <span class="text-btn-gray">Close</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modalsendtest" id="ModalSendTest" tabindex="-1" role="dialog" aria-labelledby="ModalSendTestTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Send a test email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10.557" height="10.555" viewBox="0 0 10.557 10.555">
                        <path id="ico-close" d="M17.815,16.566,21.585,12.8a.884.884,0,1,0-1.25-1.25l-3.771,3.771-3.771-3.771a.884.884,0,1,0-1.25,1.25l3.771,3.771-3.771,3.771a.884.884,0,0,0,1.25,1.25l3.771-3.771,3.771,3.771a.884.884,0,0,0,1.25-1.25Z" transform="translate(-11.285 -11.289)" fill="#b3b3b3"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger alert-dismissible fade show d-none" role="alert">
                    <strong>Error!</strong> <span class="message"></span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="form-group mb-0">
                        <label for="exampleInputEmail">Share your builder document via email</label>
                        <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="text-white-50">Use commas to separate multiple emails.</small>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <div>
                    <button type="button" class="btn btn-light" data-dismiss="modal">
                        <span class="text-btn-gray">Close</span>
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-sendMail">
                        <span class="spinner-border spinner-border-sm loading" role="status" aria-hidden="true"></span>
                        <span class="text-btn">Send test</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade modalmailto" id="ModalMailTo" tabindex="-1" role="dialog" aria-labelledby="ModalSendTestTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Mail To</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10.557" height="10.555" viewBox="0 0 10.557 10.555">
                        <path id="ico-close" d="M17.815,16.566,21.585,12.8a.884.884,0,1,0-1.25-1.25l-3.771,3.771-3.771-3.771a.884.884,0,1,0-1.25,1.25l3.771,3.771-3.771,3.771a.884.884,0,0,0,1.25,1.25l3.771-3.771,3.771,3.771a.884.884,0,0,0,1.25-1.25Z" transform="translate(-11.285 -11.289)" fill="#b3b3b3"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger alert-dismissible fade show d-none" role="alert">
                    <strong>Error!</strong> <span class="message"></span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="form-group mb-0">
                        <label for="exampleInputEmail">Write email to create link</label>
                        <input type="email" class="form-control" id="email-mailto" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="email-error" class="text-danger"></small>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <div>
                    <button type="button" class="btn btn-light" data-dismiss="modal">
                        <span class="text-btn-gray">Close</span>
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-mailto-insert">
                        <span class="spinner-border spinner-border-sm loading" role="status" aria-hidden="true"></span>
                        <span class="text-btn">Create link</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade modallink" id="ModalLink" tabindex="-1" role="dialog" aria-labelledby="ModalSendTestTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">URL Link</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10.557" height="10.555" viewBox="0 0 10.557 10.555">
                        <path id="ico-close" d="M17.815,16.566,21.585,12.8a.884.884,0,1,0-1.25-1.25l-3.771,3.771-3.771-3.771a.884.884,0,1,0-1.25,1.25l3.771,3.771-3.771,3.771a.884.884,0,0,0,1.25,1.25l3.771-3.771,3.771,3.771a.884.884,0,0,0,1.25-1.25Z" transform="translate(-11.285 -11.289)" fill="#b3b3b3"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger alert-dismissible fade show d-none" role="alert">
                    <strong>Error!</strong> <span class="message"></span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="form-group mb-0">
                        <label for="exampleInputEmail">Write a url to create link</label>
                        <input type="text" class="form-control" id="link-url" aria-describedby="emailHelp" placeholder="Enter URL">
                        <small id="link-error" class="text-danger"></small>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <div>
                    <button type="button" class="btn btn-light" data-dismiss="modal">
                        <span class="text-btn-gray">Close</span>
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-link-insert">
                        <span class="spinner-border spinner-border-sm loading" role="status" aria-hidden="true"></span>
                        <span class="text-btn">Create link</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>