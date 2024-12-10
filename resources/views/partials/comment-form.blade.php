<div class="card bg-base-300 shadow-xl p-6 mt-3">
    <form action="{{ route('comment.create') }}" method="POST">
        @csrf
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <div class="form-control">
            <label class="label">
                <span class="label-text">Comment</span>
            </label>
            <textarea name="body" class="textarea h-24 textarea textarea-bordered" placeholder="Your comment here"></textarea>
        </div>
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" class="input input-bordered">
        <div class="form-control mt-6">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
