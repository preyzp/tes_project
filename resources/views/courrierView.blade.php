@extends('template.base')
@section('content')

<div class="nk-content-body">
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