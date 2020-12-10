<form action="{{ route('content.store') }}" method="post">
@csrf
    <div >
        <label for="title">Input Title:</label>
        <input type="text" name="title">
    </div>
    <div >
    <label for="content">Content:</label>
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    </div>
    <div>
        <button type="submit">Post</button>
    </div>
</form>
<!-- ham route() tra ve url co trong route:list-->
<!-- @crsf tham so can co de tao token gui di khi store, tranh loi csrf-->