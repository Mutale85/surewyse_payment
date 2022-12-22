<form method="get" action="makePayment">
  <div class="row">

      <div class="form-group col-md-6">
          <label class="mb-2">Amount</label>
          <div class="input-group">
              <span class="input-group-text">ZMW</span>
              <input type="hidden" name="currency" id="currency" value="ZMW">
              <input type="number" name="amount" id="amount" class="form-control" step="any" min="50" max="1000" placeholder="50.00 - 1000.00" required>
              <button type="submit"class="btn btn-primary">Pay Now</button>
          </div>
          <input type="hidden" name="email" id="email" value="<?php echo $_SESSION['email']?>">
          <input type="hidden" name="parent_id" id="parent_id" value="<?php echo base64_encode($_SESSION['parent_id'])?>">
      </div>

  </div>
</form>
