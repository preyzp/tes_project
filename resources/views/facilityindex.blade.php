@extends('template.base')
@section('content')

<div class="nk-content-body">
    <div class="nk-block nk-block-lg" style="margin-top: 10px">
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <form class="form" id="frm"> 
                <div class="preview-block">
                    <span class="preview-title-lg overline-title">Facility Data View</span>
                        <div class="row gy-4">
                            <div class="card card-preview">
                                <div class="card-inner">
                                    <a href="/confirmed" style="background-color:#1ee0ac;border-radius:4px;color:#ffffff;display:inline-block;font-size:13px;font-weight:600;line-height:44px;text-align:center;text-decoration:none;text-transform: uppercase; padding: 0px 40px;margin: 10px">Approve</a>
                                    <div class="table-responsive">
                                        <table id="tblagent" class="table nk-tb-list nk-tb-ulist" data-auto-responsive="false" width="100%">
                                            <thead>
                                                    <th>No</th>
                                                    <th>Trx Code</th>
                                                    <th>Facility Type</th>
                                                    <th>Description</th>
                                                    <th>Price</th>
                                                    <th>Action</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $key)
                                                <tr>
                                                    <th scope="row">{{ $key->id }}</th>
                                                    <td>{{ $key->trxcode }}</td>
                                                    <td>{{ $key->facility_type }}</td>
                                                    <td>{{ $key->description }}</td>
                                                    <td>{{ $key->price }}</td>
                                                    <td>
                                                        <a href="/revise" style="background-color:#f4bd0e;border-radius:4px;color:#ffffff;display:inline-block;font-size:13px;font-weight:600;line-height:35px;text-align:center;text-decoration:none;text-transform: uppercase; padding: 0px 40px;margin: 10px">Revise</a>
                                                        <a href="/cancel" style="background-color:#e85347;border-radius:4px;color:#ffffff;display:inline-block;font-size:13px;font-weight:600;line-height:35px;text-align:center;text-decoration:none;text-transform: uppercase; padding: 0px 40px;margin: 10px">Cancel</a>
                                                    </td>


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