@extends('layouts.mainLayout')

@section('content')

<div class="container">
    <form action={{URL::to('/uploadChapter/'.$mangaID)}} method="post" enctype="multipart/form-data" id="myForm">
        @csrf
        <div class="form-group mb-3">
            <label for="formFile" class="form-label">Please select files</label>
            <input class="form-control" type="file" id="formFile" name="file[]" aria-describedby="fileHelp" multiple required>
            <div id="fileHelp" class="form-text">Please remember to only select files *.jpg or *.png and to correctly number the pages!!!</div>
        </div>
        <div class="form-group mb-3 w-25">
            <label for="chapterNumber" class="form-label">Please select which chapter it is</label>
            <input type="number" name="chapterNumber" id="chapterNumber" class="form-control" min="0" required>
        </div>
        <input type="hidden" name="mangaID" value={{$mangaID}}>
        <button type="submit" class="btn btn-success btn-lg" id="submit">Submit</button>
        <button type="button" class="btn btn-lg btn-outline-dark" onClick="window.location.reload();">Reset changes</button>
        <a href={{URL::to('/SingleManga/'.$mangaID)}} class="btn btn-lg btn-outline-warning">Leave without changes</a>
    </form>
</div>
<script>
    $('#submit').on('click', function() {
        if (validate() == false)
            event.preventDefault();
    });

    function validate() {
        var existingChapters = "<?= $existingChapters ?>";
        existingChapters = existingChapters.split("::");

        //check if number isn't a silly one, like 0123
        var chapterNumber = $('#chapterNumber').val();
        var digit = ('' + chapterNumber)[0];
        if (digit == 0 && chapterNumber.toString().length > 1) {
            alert("please enter correct chapter number");
            return false
        }
        //if it's correct, then check if it doesn't belong to existringChapter
        else if (existingChapters.includes(chapterNumber)) {
            alert("There already exists chapter: " + chapterNumber);
            return false;
        } else //all good
            return true;
    }
</script>
@endsection