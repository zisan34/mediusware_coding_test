@extends('layouts.app')
@section('content')
<div class="container-fluid app-body">
	<h3>Recent Posts Sent To Buffer
	</h3>

	<div class="row">
		<div class="col-md-12">
			<form method="get" action="{{url('/history')}}">
				<input type="text" name="name">
				<input type="date" name="date">
				<select>
					@foreach($groups as $group)
					<option value="{{$group->id}}">{{$group->name}}</option>
					@endforeach
				</select>
				<input type="submit">
			</form>
			<table class="table table-hover social-accounts"> 
				<thead> 
					<tr><th>Group Name</th> <th>Group Type</th> <th>Account Name</th> <th>Post Text</th> <th>Time</th> </tr> 
				</thead> 
				<tbody>
					@foreach($bufferPostings as $bufferPosting)
					<tr>
						<td>{{$bufferPosting->groupInfo['name']}}</td>
						<td>{{$bufferPosting->groupInfo['type']}}</td>
						<td><img src="{{$bufferPosting->accountInfo['avatar']}}" style="max-height: 50px; border-radius: 50%;"></td>
						<td>{{$bufferPosting->post['text']}}</td>
						<td>{{$bufferPosting->sent_at}}</td>



					</tr>
					@endforeach
				</tbody> 
			</table>
			{{$bufferPostings->links()}}
		</div>
	</div>
</div>
@endsection
