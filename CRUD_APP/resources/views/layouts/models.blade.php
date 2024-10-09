<div id="overlay"
    style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background-color: rgba(0, 0, 0, 0.5);">
</div>
<div id="confirmDeleteForm" class="bg-dark rounded-lg"
    style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); padding: 20px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1);">
    <div class="model modal-sheet bg-dark">
        <div class="modal-body p-4 text-center text-white">
            <p>Bạn có chắc chắn muốn xóa học sinh này không?</p>
        </div>
        <div class="modal-footer d-flex justify-content-around">
            <form method="POST" id='deleteForm'>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-lg btn-link fs-6 text-decoration-none border"
                    style="padding-right:auto " onclick="submitDeleteForm()">
                    <strong>Yes, enable</strong>
                </button>
            </form>
            <button type="button" onclick="hideConfirmationForm()"
                class="btn btn-lg btn-link fs-6 text-decoration-none border" data-bs-dismiss="modal">
                <strong>No thanks</strong>
            </button>
        </div>

    </div>
</div>
