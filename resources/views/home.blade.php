@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<div class="col-md-4">
    		<nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    			<a class="nav-link active" id="v-pills-apply-tab" data-toggle="pill" href="#v-pills-apply" role="tab" aria-controls="v-pills-apply" aria-selected="false">応募リスト</a>
		      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true">プロフィール編集</a>
		      
		    </nav>
    	</div>
        <div class="col-md-8">
        	<div class="tab-content" id="v-pills-tabContent">
		      <div class="tab-pane fade show active" id="v-pills-apply" role="tabpanel" aria-labelledby="v-pills-apply-tab">
		      	<div class="card">
	                <div class="card-header">{{ __('応募リスト') }}</div>
						
	                <div class="card-body">
	                    @if (session('status'))
	                        <div class="alert alert-success" role="alert">
	                            {{ session('status') }}
	                        </div>
	                    @endif

	                    <table class="table table-borderd">
	                    	<thead>
	                    		<tr>
	                    			<th>No</th>
	                    			<th>会社名</th>
	                    			<th>店舗名</th>
	                    			<th>所在地</th>
	                    			<th>状況</th>
	                    			<th>詳細</th>
	                    		</tr>
	                    	</thead>
	                    	<tbody>
	                    		<tr>
		                    		<td>1</td>
		                    		<td>株式会社ポーカー連盟</td>
		                    		<td>CLT</td>
		                    		<td>東京都新宿区</td>
		                    		<td>書類選考中</td>
		                    		<td><button class="btn btn-primary">詳細</button></td>
	                    		</tr>
	                    	</tbody>
	                    </table>
	                </div>
	            </div>
		      </div>
		      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
		      	<div class="card">
	                <div class="card-header">{{ __('プロフィール編集') }}</div>
						
	                <div class="card-body">
	            </div>
		      </div>
		    </div>
            
        </div>
    </div>
</div>
@endsection
