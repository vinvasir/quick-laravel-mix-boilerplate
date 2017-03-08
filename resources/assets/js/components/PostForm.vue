<template>
	<form action="/posts" method="post">
		<slot></slot>
		<div class="form-group">
				<label>Title:</label>
				<input class="form-control" type="text" name="title">
		</div>

		<div class="form-group">
				<label>Body:</label>
				<textarea class="form-control" name="body"></textarea>
		</div>

		<button class="btn btn-primary" type="submit">Post</button>
	</form>	
</template>

<script type="text/javascript">
	export default {

	}
</script>