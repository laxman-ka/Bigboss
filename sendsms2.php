<?php include "header.php"; ?>

<div class="container-fluid">
    <div class="row sms">
        <div class="col-lg-2">
            <h3>Send SMS</h3>
        </div>
    <div class="col-lg-8">
           <div role="tabpanel">
                <ul class="nav nav-tabs sms-mode" role="tablist">
                    
                    <li role="tab" class="active">
                        <label data-target="#single-sms">
                            <input id="optDaily" name="intervaltype" type="radio" checked />
                            Single
                        </label>
                    </li>
                    
                    <li role="tab">
                        <label data-target="#bulk-sms">
                            <input id="optWeekly" name="intervaltype" type="radio" />
                            Bulk
                        </label>
                    </li>
                    
                    <li role="tab">
                        <label data-target="#custom-sms">
                            <input id="optMontly" name="intervaltype" type="radio" />
                            Custom
                        </label>
                    </li>                    
                </ul>
            </div>
    </div>
        <div class="col-lg-2">
            <div class="row">
                <div class="col-lg-4">
                    <a href="#" class="btn btn-default btn-sms">Send </a>
                </div>
                <div class="col-lg-8">
                    <a href="#" class="btn btn-default btn-sms">Schedule Later </a>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="single-sms">
            <form  role="form">
    <div class="row">
        <div class="col-lg-2 form-group form-first">
            <label>To Mobile no.</label>
            <div>
                <textarea class="special"></textarea>
            </div>
            <div>
                <!-- <a href="#" class="btn btn-primary btn-block">+ Bulk Upload</a> -->
                <a href="#" class="btn btn-primary btn-block">+ Add From Phonebook</a>
            </div>
        </div>
        <div class="col-lg-4 form-second">
            <div class="form-group">
                <label>Campaign Name</label>
                <input type="text" class="form-control" name="data[campaign]">
            </div>
            <div class="form-group">
                <label>Sender Id</label>
                <select class="form-control" name="data[sender]">
                    <option value="">Select A Sender Id</option>
                    <option value="Laxman">LAXMAN</option>
                    <option value="Laxman">LAXMAN</option>
                    <option value="Laxman">LAXMAN</option>
                    <option value="Laxman">LAXMAN</option>
                    <option value="Laxman">LAXMAN</option>
                </select>
            </div>
            <div class="form-group">
                <label>Message Type</label>
                <div>
                    <label class="radio-inline"><input type="radio" name="optradio">SMS</label>
                    <label class="radio-inline"><input type="radio" name="optradio">UNICODE</label>
                    <label class="radio-inline"><input type="radio" name="optradio">FLASH</label>
                </div>
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea  class="form-control" name="data[message]" rows="5"></textarea>
                <div class="hint">
                    <small>Max of 1000 Chars</small>
                    <small class="pull-right">0/1000</small>
                </div>
            </div>
            <div class="form-group">
                <label>Signature</label>
                <select class="form-control" name="data[signature]">
                    <option value="">Select A Signature</option>
                    <option value="Laxman">I am signature</option>
                    <option value="Laxman">LAXMAN</option>
                    <option value="Laxman">LAXMAN</option>
                    <option value="Laxman">LAXMAN</option>
                    <option value="Laxman">LAXMAN</option>
                </select>
            </div>
        </div>
    </div>
</form>
        </div>
        
        <div role="tabpanel" class="tab-pane" id="bulk-sms">
            <form  role="form">
    <div class="row">
        <div class="col-lg-2 form-group form-first">
            <label>To Mobile no.</label>
            <div>
                <div class="special"><a href="#" class="btn btn-primary link">+ Add Number</a></div>
            </div>
            <div>
                <a href="#" class="btn btn-primary btn-block">+ Bulk Upload</a>
                <a href="#" class="btn btn-primary btn-block">+ Add From Phonebook</a>
            </div>
        </div>
        <div class="col-lg-4 form-second">
            <div class="form-group">
                <label>Campaign Name</label>
                <input type="text" class="form-control" name="data[campaign]">
            </div>
            <div class="form-group">
                <label>Sender Id</label>
                <select class="form-control" name="data[sender]">
                    <option value="">Select A Sender Id</option>
                    <option value="Laxman">LAXMAN</option>
                    <option value="Laxman">LAXMAN</option>
                    <option value="Laxman">LAXMAN</option>
                    <option value="Laxman">LAXMAN</option>
                    <option value="Laxman">LAXMAN</option>
                </select>
            </div>
            <div class="form-group">
                <label>Message Type</label>
                <div>
                    <label class="radio-inline"><input type="radio" name="optradio">SMS</label>
                    <label class="radio-inline"><input type="radio" name="optradio">UNICODE</label>
                    <label class="radio-inline"><input type="radio" name="optradio">FLASH</label>
                </div>
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea  class="form-control" name="data[message]" rows="5"></textarea>
                <div class="hint">
                    <small>Max of 1000 Chars</small>
                    <small class="pull-right">0/1000</small>
                </div>
            </div>
            <div class="form-group">
                <label>Signature</label>
                <select class="form-control" name="data[signature]">
                    <option value="">Select A Signature</option>
                    <option value="Laxman">I am signature</option>
                    <option value="Laxman">LAXMAN</option>
                    <option value="Laxman">LAXMAN</option>
                    <option value="Laxman">LAXMAN</option>
                    <option value="Laxman">LAXMAN</option>
                </select>
            </div>
        </div>
    </div>
</form>
        </div>
        
        <div role="tabpanel" class="tab-pane" id="custom-sms">
        <form  role="form">
        <div class="row">
        <div class="col-lg-2 form-group form-first">
            <label>To Mobile no.</label>
            <div>
                <div class="special"><a href="http://www.googel.com/" class="btn btn-primary link">+ Add Number</a></div>
            </div>
            <div>
                <!-- <a href="#" class="btn btn-primary btn-block">+ Bulk Upload</a> -->
                <a href="#" class="btn btn-primary btn-block"> Browse Document</a>
            </div>
        </div>
        <div class="col-lg-4 form-second">
                <div class="form-group">
                    <label>Campaign Name</label>
                    <input type="text" class="form-control" name="data[campaign]">
                </div>
                <div class="form-group">
                    <label>Sender Id</label>
                    <select class="form-control" name="data[sender]">
                        <option value="">Select A Sender Id</option>
                        <option value="Laxman">LAXMAN</option>
                        <option value="Laxman">LAXMAN</option>
                        <option value="Laxman">LAXMAN</option>
                        <option value="Laxman">LAXMAN</option>
                        <option value="Laxman">LAXMAN</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Message Type</label>
                    <div>
                        <label class="radio-inline"><input type="radio" name="optradio">SMS</label>
                        <label class="radio-inline"><input type="radio" name="optradio">UNICODE</label>
                        <label class="radio-inline"><input type="radio" name="optradio">FLASH</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea  class="form-control" name="data[message]" rows="5"></textarea>
                    <div class="hint">
                        <small>Max of 1000 Chars</small>
                        <small class="pull-right">0/1000</small>
                    </div>
                </div>
                <div class="form-group">
                    <label>Signature</label>
                    <select class="form-control" name="data[signature]">
                        <option value="">Select A Signature</option>
                        <option value="Laxman">I am signature</option>
                        <option value="Laxman">LAXMAN</option>
                        <option value="Laxman">LAXMAN</option>
                        <option value="Laxman">LAXMAN</option>
                        <option value="Laxman">LAXMAN</option>
                    </select>
                </div>
            </div>
        </div>
            </form>       
        </div>
    </div>
</div>

