@extends('template.base')
@section('content')

<div class="nk-content-body">
    <div class="nk-block nk-block-lg">
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <form class="form" id="frm"> 
                <div class="preview-block">
                    <span class="preview-title-lg overline-title">Add Data</span>
                        <div class="row gy-4">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">Trx Code</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="default-01" placeholder="Trx Code">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="default-06">Facility Type</label>
                                    <div class="form-control-wrap ">
                                        <div class="form-control-select">
                                            <select class="form-control" id="default-06">
                                                <option value="default_option">Choose facility type</option>
                                                <option value="option_select_name">Option select name</option>
                                                <option value="option_select_name">Option select name</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="default-textarea">Description</label>
                                <div class="form-control-wrap">
                                    <textarea class="form-control no-resize" id="default-textarea">Description</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="default-01">Price</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="default-01" placeholder="Price">
                                </div>
                            </div>
                            <button class="btn btn-primary" id="savebtn">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- .nk-block -->
    <div class="nk-block nk-block-lg" style="margin-top: 10px">
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <form class="form" id="frm"> 
                <div class="preview-block">
                    <span class="preview-title-lg overline-title">Courier Data View</span>
                        <div class="row gy-4">
                            <div class="card card-preview">
                                <div class="card-inner">
                                    <div class="table-responsive">
                                        <table id="tblagent" class="table nk-tb-list nk-tb-ulist" data-auto-responsive="false" width="100%">
                                            <thead>
                                                    <th>No</th>
                                                    <th>Courier</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $key)
                                                <tr>
                                                    <th scope="row">{{ $key->rowID }}</th>
                                                    <td>{{ $key->courier_cd }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- .nk-block -->
</div>
@endsection