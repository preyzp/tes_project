@extends('template.base')
@section('content')

<div class="nk-content-body">
    <div class="nk-block nk-block-lg">
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <form class="form" id="frm" action="/facilitysave" method="POST">
                @csrf 
                <div class="preview-block">
                    <span class="preview-title-lg overline-title">Add Data</span>
                        <div class="row gy-4">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">Trx Code</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="trxcode" id="trxcode" placeholder="Trx Code">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="default-06">Facility Type</label>
                                    <div class="form-control-wrap ">
                                        <div class="form-control-select">
                                            <select class="form-control" id="facilitytype" name="facilitytype">
                                                @foreach ($datadrop as $item )
                                                <option value="{{$item->descs}}">{{$item->descs}}</option>    
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="default-textarea">Description</label>
                                <div class="form-control-wrap">
                                    <textarea class="form-control no-resize" id="description" name="description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="price">Price</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                                </div>
                            </div>
                            <button class="btn btn-primary" id="savebtn">Save</button>
                            <button class="btn btn-danger" href="/">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- .nk-block -->
</div>
@endsection