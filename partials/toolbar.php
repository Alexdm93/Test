<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-green nav-toolbar">
    <div class="container-fluid justify-content-between">
        <div class="m-0 p-0">
            <button class="btn btn-tertiary btn-back">
                <span class="text-btn text-btn-hover-green">Back</span>
            </button>
        </div>

        <?php if($current_url == 'builder'): ?>
        <div class="card menu text-center w-auto shadow">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills align-items-center">
                    <li class="nav-item pr-2">
                        <button class="btn btn-primary btn-save" disabled="disabled">
                            <span>Save</span>
                        </button>
                    </li>
                    <li class="line pl-1">
                        &nbsp;
                    </li>
                    <li class="nav-item">
                        <button class="btn border-0 btn-toolbar btn-bold" data-tooltip="tooltip" title="Bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.447" height="19.906" viewBox="0 0 15.447 19.906">
                                <path id="Subtraction_2" data-name="Subtraction 2" d="M-1344.74,15.7h-8.919a1.035,1.035,0,0,1-1.033-1.034V-3.177a1.035,1.035,0,0,1,1.033-1.034h6.257a5.486,5.486,0,0,1,4.785,2.809,5.486,5.486,0,0,1-.125,5.558l-.445.718.766.356a5.511,5.511,0,0,1,3.175,4.971A5.51,5.51,0,0,1-1344.74,15.7Zm-7.885-8.919v6.852h7.886a3.43,3.43,0,0,0,3.425-3.426,3.429,3.429,0,0,0-3.425-3.425Zm0-8.919V4.708h5.21a3.429,3.429,0,0,0,3.425-3.425,3.429,3.429,0,0,0-3.425-3.425Z" transform="translate(1354.693 4.211)" fill="#58595b"/>
                              </svg>                                      
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn border-0 btn-toolbar btn-italic" data-tooltip="tooltip" title="Italic">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.856" height="21.042" viewBox="0 0 15.856 21.042">
                                <path id="ico-italic" d="M17.692,0H6.457a.864.864,0,1,0,0,1.728h4.627L8.727,19.013H3.864a.864.864,0,1,0,0,1.728H15.1a.864.864,0,1,0,0-1.728H10.472L12.829,1.728h4.863a.864.864,0,1,0,0-1.728Z" transform="translate(-2.85 0.15)" fill="#58595b" stroke="#fff" stroke-width="0.3"/>
                            </svg>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn border-0 btn-toolbar btn-underline" data-tooltip="tooltip" title="Underline">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21.042" height="21.042" viewBox="0 0 21.042 21.042">
                                <g id="ico-underline" transform="translate(0.15 0.15)">
                                <path id="Trazado_26" data-name="Trazado 26" d="M10.914,17.285a6.922,6.922,0,0,0,6.914-6.914V.864a.864.864,0,0,0-1.728,0v9.507a5.185,5.185,0,0,1-10.371,0V.864A.864.864,0,0,0,4,.864v9.507a6.922,6.922,0,0,0,6.914,6.914Z" transform="translate(-0.543 0)" fill="#58595b" stroke="#fff" stroke-width="0.3"/>
                                <path id="Trazado_27" data-name="Trazado 27" d="M19.878,22H.864a.864.864,0,1,0,0,1.728H19.878a.864.864,0,1,0,0-1.728Z" transform="translate(0 -2.987)" fill="#58595b" stroke="#fff" stroke-width="0.3"/>
                                </g>
                            </svg>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn border-0 btn-toolbar btn-strike" data-tooltip="tooltip" title="Strikethrough">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.07" height="20.07" viewBox="0 0 20.07 20.07">
                                <path id="strikethrough" d="M8.362,20.07a.837.837,0,0,1,0-1.673H9.2V12.544h1.672V18.4h.837a.837.837,0,0,1,0,1.673Zm-5.632-9.2a.836.836,0,0,1,0-1.672H17.339a.836.836,0,0,1,0,1.672ZM9.2,7.526V1.672H.837A.836.836,0,1,1,.837,0h18.4a.836.836,0,1,1,0,1.672H10.871V7.526Z" transform="translate(0 0)" fill="#58595b"/>
                            </svg>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn border-0 btn-toolbar btn-font_up" data-tooltip="tooltip" title="Font Up">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23.145" height="20.07" viewBox="0 0 23.145 20.07">
                                <path id="font-size" d="M-2293.679,63.164V45.812h-6.166a.906.906,0,0,1-.906-.906.906.906,0,0,1,.906-.905h14.085a.906.906,0,0,1,.906.905.906.906,0,0,1-.906.906h-6.107V63.164a.906.906,0,0,1-.906.906A.906.906,0,0,1-2293.679,63.164Zm-10.383,0V53.9h-3.032A.906.906,0,0,1-2308,53a.906.906,0,0,1,.906-.906h7.843a.906.906,0,0,1,.906.906.906.906,0,0,1-.906.905h-3v9.261a.906.906,0,0,1-.906.906A.906.906,0,0,1-2304.062,63.164Z" transform="translate(2308 -44)" fill="#58595b"/>
                            </svg>
                        </button>
                        <div id="fontSize" class="dropFontSize">
                            <div class="sizes" size="2">X-Small</div>
                            <div class="sizes" size="3">Small</div>
                            <div class="sizes" size="4">Medium</div>
                            <div class="sizes" size="5">Large</div>
                            <div class="sizes" size="6">X-Large</div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <button class="btn border-0 btn-toolbar btn-align-left" data-tooltip="tooltip" title="Left Align">
                            <img src="assets/images/ico-align_l.png" class="img-fluid" style="max-width: 24px;">                                       
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn border-0 btn-toolbar btn-align-center" data-tooltip="tooltip" title="Center Align">
                            <img src="assets/images/ico-align_c.png" class="img-fluid" style="max-width: 24px;">                                       
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn border-0 btn-toolbar btn-align-right" data-tooltip="tooltip" title="Right Align">
                            <img src="assets/images/ico-align_r.png" class="img-fluid" style="max-width: 24px;">                                       
                        </button>
                    </li>
                    <li class="nav-item-">
                        <button class="btn border-0 btn-toolbar btn-color" data-tooltip="tooltip"  title="Text Color">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16.095" height="20.225" viewBox="0 0 16.095 20.225">
                                <g id="ico-textcolor" transform="translate(-52.798 0.151)">
                                    <path id="green" d="M96.414,404.565H106c.441,0,.8.186.8.416v1.663c0,.23-.358.416-.8.416H96.414c-.441,0-.8-.186-.8-.416v-1.663C95.615,404.751,95.973,404.565,96.414,404.565Z" transform="translate(-40.361 -388.796)" fill="#1ec46b"/>
                                    <path id="gray" d="M-2342.1-15.452a2.229,2.229,0,0,1-2.225-2.227v-1.663a2.228,2.228,0,0,1,2.225-2.225h11.645a2.226,2.226,0,0,1,2.225,2.225v1.663a2.226,2.226,0,0,1-2.225,2.227Zm-1.1-3.889v1.663a1.1,1.1,0,0,0,1.1,1.1h11.645a1.1,1.1,0,0,0,1.1-1.1v-1.663a1.1,1.1,0,0,0-1.1-1.1H-2342.1A1.1,1.1,0,0,0-2343.2-19.342Zm1.49,2.227a.564.564,0,0,1-.562-.563v-1.664a.564.564,0,0,1,.563-.563h10.866a.564.564,0,0,1,.563.563v1.664a.564.564,0,0,1-.563.563Zm.416-.98h10.034v-.829h-10.034Zm8.641-4.395-1.258-3.775h-4.733l-1.257,3.775a.563.563,0,0,1-.532.385.593.593,0,0,1-.179-.029.562.562,0,0,1-.324-.283.559.559,0,0,1-.032-.43l4.164-12.489a.582.582,0,0,1,.53-.342.557.557,0,0,1,.238.054.572.572,0,0,1,.288.288l.005.014,4.16,12.475a.567.567,0,0,1-.03.428.567.567,0,0,1-.315.281l-.013,0h0a.569.569,0,0,1-.172.029A.563.563,0,0,1-2332.654-22.489Zm-5.615-4.9h3.98l-1.99-5.975Z" transform="translate(2397.124 35.526)" fill="#58595b"/>
                                </g>
                            </svg>
                        </button>
                        <div id="colorList" style="display:none;position:absolute">
                            <div class="colors" color="#17355E" style="background-color:#17355E;"></div>
                            <div class="colors" color="#74CDDE" style="background-color:#74CDDE;"></div>
                            <div class="colors" color="#D9272D" style="background-color:#D9272D;"></div>
                            <div class="colors" color="#28778A" style="background-color:#28778A;"></div>
                            <div class="colors" color="#58595B" style="background-color:#58595B;"></div>
                            <div class="colors" color="#27C453" style="background-color:#27C453;"></div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <button class="btn border-0 btn-toolbar btn-link" data-tooltip="tooltip"  title="Link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.07" height="20.075" viewBox="0 0 20.07 20.075">
                                <g id="ico-link" transform="translate(-0.502 -0.5)">
                                  <path id="Subtraction_3" data-name="Subtraction 3" d="M-2327.634-13.952a4.409,4.409,0,0,1-3.139-1.3,4.447,4.447,0,0,1,0-6.279l3.571-3.57a7.258,7.258,0,0,0,.3,1.721c0,.014.008.028.012.041l-2.847,2.849a2.95,2.95,0,0,0-.869,2.1,2.949,2.949,0,0,0,.869,2.1,2.946,2.946,0,0,0,2.1.869,2.949,2.949,0,0,0,2.1-.869l3.16-3.159,1.289-1.288a2.941,2.941,0,0,0,.859-2.12,3,3,0,0,0-.86-2.082c-.06-.059-.118-.111-.179-.161v-.007c0-.009,0-.018,0-.027-.033-.376-.042-.617.185-.843l.471-.471a4.161,4.161,0,0,1,.568.471,4.482,4.482,0,0,1,1.282,3.105,4.383,4.383,0,0,1-1.282,3.173l-4.448,4.449A4.41,4.41,0,0,1-2327.634-13.952Zm4.5-7.9h0a4.147,4.147,0,0,1-.566-.471,4.5,4.5,0,0,1-1.282-3.079,4.372,4.372,0,0,1,1.282-3.2l4.127-4.127a4.409,4.409,0,0,1,3.139-1.3,4.413,4.413,0,0,1,3.139,1.3,4.447,4.447,0,0,1,0,6.279l-3.252,3.252a7.178,7.178,0,0,0-.3-1.719l-.006-.02,0-.013,0-.012,2.528-2.529a2.948,2.948,0,0,0,.868-2.1,2.948,2.948,0,0,0-.868-2.1,2.949,2.949,0,0,0-2.1-.868,2.942,2.942,0,0,0-2.1.866l-.291.291-.138.138-3.336,3.336-.365.365a2.934,2.934,0,0,0-.859,2.12,2.993,2.993,0,0,0,.859,2.08,2.392,2.392,0,0,0,.181.165c0,.01,0,.021,0,.031.033.376.042.618-.184.844l-.471.471Z" transform="translate(2332.573 34.526)" fill="#58595b"/>
                                </g>
                            </svg>                                               
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn border-0 btn-toolbar btn-mailto" data-tooltip="tooltip"  title="Mail To">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24.178" height="24.178" viewBox="0 0 24.178 24.178">
                                <path id="at" d="M12.089,0a12.089,12.089,0,1,0,6.448,22.316l-.807-1.278a10.578,10.578,0,1,1,4.937-8.949v.756a2.267,2.267,0,0,1-4.533,0V7.556H16.622v.578a6.042,6.042,0,1,0,.712,6.9,3.77,3.77,0,0,0,6.844-2.19v-.756A12.1,12.1,0,0,0,12.089,0Zm0,16.622a4.533,4.533,0,1,1,4.533-4.533,4.538,4.538,0,0,1-4.533,4.533Z" fill="#58595b"/>
                            </svg>
                        </button>
                    </li>
                    <!-- <li class="nav-item">
                        <button class="btn border-0 btn-toolbar btn-list" data-tooltip="tooltip"  title="List">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18.996" height="20.351" viewBox="0 0 18.996 20.351">
                                <g id="ico-list" transform="translate(64.314 0.001)">
                                  <path id="Union_3" data-name="Union 3" d="M0,17.58a2.771,2.771,0,1,1,2.77,2.771A2.774,2.774,0,0,1,0,17.58Zm1.226.006A1.544,1.544,0,1,0,2.77,16.042,1.546,1.546,0,0,0,1.226,17.586Zm6.363.6a.613.613,0,1,1,0-1.227H18.383a.613.613,0,0,1,0,1.227ZM0,10.179a2.771,2.771,0,1,1,2.77,2.772A2.774,2.774,0,0,1,0,10.179Zm1.226,0A1.544,1.544,0,1,0,2.77,8.636,1.546,1.546,0,0,0,1.226,10.179Zm6.363.613a.613.613,0,1,1,0-1.227H18.383a.613.613,0,0,1,0,1.227ZM0,2.771A2.771,2.771,0,1,1,2.77,5.543,2.774,2.774,0,0,1,0,2.771Zm1.226.006A1.544,1.544,0,1,0,2.77,1.233,1.546,1.546,0,0,0,1.226,2.777ZM7.589,3.4a.614.614,0,0,1,0-1.228H18.383a.614.614,0,0,1,0,1.228Z" transform="translate(-64.314 -0.001)" fill="#58595b"/>
                                </g>
                              </svg>                                                                       
                        </button>
                    </li> -->
                    <li class="line px-1">
                        &nbsp;
                    </li>
                    <li class="nav-item">
                        <a class="btn border-0 btn-toolbar btn-download_xd" data-tooltip="tooltip"  title="Download XD">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26.4" height="26.4" viewBox="0 0 26.4 26.4">
                                <g id="ico-xd" transform="translate(0.2 0.2)">
                                    <g id="Xd_Icon" data-name="Xd Icon" transform="translate(0 0)">
                                        <path id="Path_2532" data-name="Path 2532" d="M23.355,1.523a1.123,1.123,0,0,1,1.122,1.122v20.71a1.123,1.123,0,0,1-1.122,1.122H2.645a1.123,1.123,0,0,1-1.122-1.122V2.645A1.123,1.123,0,0,1,2.645,1.523Zm0-1.523H2.645A2.645,2.645,0,0,0,0,2.645v20.71A2.645,2.645,0,0,0,2.645,26h20.71A2.645,2.645,0,0,0,26,23.355V2.645A2.645,2.645,0,0,0,23.355,0Z" transform="translate(0 0)" fill="#58595b" stroke="#fff" stroke-width="0.4"/>
                                        <path id="Path_2533" data-name="Path 2533" d="M106.519,153.4l2.877-4.707c.046-.091.03-.152-.061-.152h-1.706a.172.172,0,0,0-.183.122c-.7,1.249-1.417,2.5-2.087,3.763h-.015c-.686-1.264-1.447-2.514-2.118-3.778a.165.165,0,0,0-.183-.107h-1.859a.084.084,0,0,0-.076.137l2.925,4.845-2.986,4.875c-.046.061-.046.152.061.152h1.782a.177.177,0,0,0,.183-.122c.717-1.249,1.433-2.544,2.118-3.824h.015c.746,1.31,1.493,2.575,2.224,3.824a.213.213,0,0,0,.229.122h1.874c.076-.015.122-.076.061-.152Zm10.177,3.6v-9.2c0-.061,0-.091-.076-.091h-1.661c-.061,0-.091.03-.091.107v3.123a5.27,5.27,0,0,0-.655-.046,3.982,3.982,0,0,0-4.327,3.976,3.59,3.59,0,0,0,3.9,3.839,7.224,7.224,0,0,0,2.879-.594.119.119,0,0,0,.091-.137C116.726,157.694,116.7,157.3,116.7,156.993Zm-1.828,0a2.818,2.818,0,0,1-.884.122,2.08,2.08,0,0,1-2.209-2.346,2.23,2.23,0,0,1,2.377-2.346,2.025,2.025,0,0,1,.716.107Z" transform="translate(-95.889 -140.2)" fill="#58595b" stroke="#fff" stroke-width="0.4"/>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <button class="btn border-0 btn-toolbar btn-copy_url" data-tooltip="tooltip" title="Copy URL">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26.8" height="26.8" viewBox="0 0 26.8 26.8">
                                <g id="ico-copy" transform="translate(0.4 0.4)">
                                    <path id="Path_2531" data-name="Path 2531" d="M26.38,3H11.62A2.63,2.63,0,0,0,9,5.62V9H5.62A2.63,2.63,0,0,0,3,11.62V26.38A2.63,2.63,0,0,0,5.62,29H20.38A2.63,2.63,0,0,0,23,26.38V23h3.38A2.63,2.63,0,0,0,29,20.38V5.62A2.63,2.63,0,0,0,26.38,3ZM21,26.38a.62.62,0,0,1-.62.62H5.62A.62.62,0,0,1,5,26.38V11.62A.62.62,0,0,1,5.62,11H20.38a.62.62,0,0,1,.62.62Zm6-6a.62.62,0,0,1-.62.62H23V11.62A2.63,2.63,0,0,0,20.38,9H11V5.62A.62.62,0,0,1,11.62,5H26.38a.62.62,0,0,1,.62.62Z" transform="translate(-3 -3)" fill="#58595b" stroke="#fff" stroke-width="0.8"/>
                                </g>
                            </svg>
                        </button>
                    </li>
                    <li class="line px-1">
                        &nbsp;
                    </li>
                    <li class="nav-item">
                        <a href="#"  class="btn border-0 btn-toolbar" data-tooltip="tooltip" title="Preview Mobile" data-toggle="modal" data-target="#modalPreview" data-width="340">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14.902" height="24.178" viewBox="0 0 14.902 24.178">
                                <g id="ico-phone" transform="translate(-0.15 -0.15)">
                                  <path id="Subtraction_10" data-name="Subtraction 10" d="M-2424.975-9.771h-10.541a2.1,2.1,0,0,1-2.181-2V-31.947a2.1,2.1,0,0,1,2.181-2h10.541a2.1,2.1,0,0,1,2.181,2v20.174A2.1,2.1,0,0,1-2424.975-9.771Zm-11.587-3.108v1.106a.971.971,0,0,0,1.047.868h10.541a.971.971,0,0,0,1.047-.868v-1.106Zm1.047-19.935a.971.971,0,0,0-1.047.867v17.934h12.634V-31.947a.971.971,0,0,0-1.047-.867Z" transform="translate(2437.847 34.099)" fill="#58595b"/>
                                </g>
                            </svg>                                      
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#"  class="btn border-0 btn-toolbar" data-tooltip="tooltip" title="Preview Desktop" data-toggle="modal" data-target="#modalPreview" data-width="920">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26.826" height="24.178" viewBox="0 0 26.826 24.178">
                                <path id="Subtraction_11" data-name="Subtraction 11" d="M-2451.54-9.771h-16.953a.646.646,0,0,1-.645-.644.646.646,0,0,1,.645-.645h4.442v-4.22h-7.939a1.441,1.441,0,0,1-1.439-1.44V-32.509a1.441,1.441,0,0,1,1.439-1.44h23.948a1.441,1.441,0,0,1,1.439,1.44v15.788a1.441,1.441,0,0,1-1.439,1.44h-7.939v4.22h4.441a.646.646,0,0,1,.645.645A.646.646,0,0,1-2451.54-9.771Zm-11.223-5.51v4.22h5.493v-4.22Zm-9.377-17.378v16.088h24.1c.1,0,.15-.067.151-.2,0-.045,0-.13,0-.288v-2.1c0-2.108,0-6.035,0-13.349v-.15Z" transform="translate(2473.429 33.949)" fill="#58595b"/>
                            </svg>                                      
                        </a>
                    </li> 
                </ul>
            </div>
        </div>
        <?php endif; ?>

        <div>
            <?php if($current_url == 'builder'): ?>
            <!-- 
                <button class="btn btn-tertiary btn-preview mr-2">
                    <span>Preview</span>
                </button> 
            -->
            <button class="btn btn-secondary btn-publish">
                <span class="spinner-border spinner-border-sm loading" role="status" aria-hidden="true"></span>
                <span>Create version</span>
            </button>
            <?php endif; ?>
        </div>
    </div>
</nav>