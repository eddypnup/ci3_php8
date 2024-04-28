        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <!-- <div class="col-lg-12 grid-margin stretch-card">
                <p class="text-primary font-weight-medium">
                  Orderan ini berasal dari: Penjualan Langsung
                </p>
              </div> -->
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title mb-4">Tambah Barang</h5>
                    <div class="row">
                      <div class="col-md-6">
                        <select
                          class="form-control mb-4"
                          id="inputGroupSelect02"
                        >
                          <option selected>Pilih Barang</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <button class="btn btn-primary">Tambah Barang</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive pt-3">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Gambar</th>
                            <th>Produk</th>
                            <th>Kuantitas</th>
                            <th>Harga Satuan</th>
                            <th>Berat</th>
                            <th>Total</th>
                            <th>Tujuan Order</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <img src="<?=base_url('assets/images/foto-produk/CLh 5.png')?>" style="border-radius: 0px; width: 60px; height: 60px; " alt=""/>
                            </td>
                            <td>
                              <a href="<?=base_url('cart/produkDetail')?>" class="text-decoration-none">Collastar - 5 Sachets</a>
                            </td>
                            <td>
                              <form class="row g-3 mt-4">
                                <div class="col-auto">
                                  <input type="number" class="form-control" />
                                </div>
                                <div class="col-auto" style="margin-top: 7px">
                                  <a href="#" class="btn btn-outline-primary" style="border-radius: 5px; padding: 10px" >Submit</a>
                                </div>
                              </form>
                            </td>
                            <td>Rp.12,0000</td>
                            <td>Rp.12,000</td>
                            <td>Pusat</td>
                            <td>
                              <button class="btn btn-danger">Hapus</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="<?=base_url('assets/images/foto-produk/CLh 5.png')?>" style="border-radius: 0px; width: 60px; height: 60px;" alt="" />
                            </td>
                            <td>
                              <a href="./pages/product/product-detail.html" class="text-decoration-none" >Collastar - 5 Sachets</a>
                            </td>
                            <td>
                              <form class="row g-3 mt-4">
                                <div class="col-auto">
                                  <input type="number" class="form-control" />
                                </div>
                                <div class="col-auto" style="margin-top: 7px">
                                  <a href="#" class="btn btn-outline-primary" style="border-radius: 5px; padding: 10px" >Submit</a>
                                </div>
                              </form>
                            </td>
                            <td>Rp.12,0000</td>
                            <td>Rp.12,000</td>
                            <td>Pusat</td>
                            <td>
                              <button class="btn btn-danger">Hapus</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4>Pilih Pembelian Barang</h4>
                    <div class="row mt-4">
                      <div class="col-lg-4 mb-3">
                        <button
                          class="btn btn-primary"
                          data-toggle="modal"
                          data-target="#exampleModal"
                        >
                          Pembelian Melalui Pusat
                        </button>
                      </div>
                      <div class="col-lg-4 mb-3">
                        <button class="btn btn-primary">
                          Pembelian Melalui Distributor
                        </button>
                      </div>
                      <div class="col-lg-4 mb-3">
                        <button
                          class="btn btn-primary"
                          data-toggle="modal"
                          data-target="#exampleModal2"
                        >
                          Pembelian Melalui Partner Kota
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-8">
                        <h5>Subtotal Produk</h5>
                        <h4 class="text-primary">Rp.90,000</h4>
                      </div>
                      <div class="col-4">
                        <button class="btn btn-primary float-right">
                          <a
                            href="order.html"
                            class="text-decoration-none text-white"
                            >Order</a
                          >
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h3>Detail Orderan</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <a href="cart-penjualan-langsung.html" class="btn btn-outline-primary text-sm-left text-dark">
                    <p class="text-dark">
                      Penjualan Langsung <br />
                      Toko Online media sosial (WhatsApp/FB/IG/dll)
                    </p>
                  </a>
                  <br />
                  <br />
                  <a href="cart-penjualan-marketplace.html" class="btn btn-outline-primary text-sm-left text-dark">
                    <p class="text-dark">
                      Penjualan MarketPlace <br />
                      (Shopee, Tokopedia, Lazada, dll)
                    </p>
                  </a>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Cancel
                  </button>
                  <a href="customer-order-details.html">
                    <button type="button" class="btn btn-primary">
                      Pembayaran
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal 2 -->
          <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h3>Detail Orderan</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <a href="cart-penjualan-marketplace.html" class="btn btn-outline-primary text-sm-left text-dark">
                    <p class="text-dark">
                      Penjualan Langsung <br />
                      Toko Online media sosial (WhatsApp/FB/IG/dll)
                    </p>
                  </a>
                  <br />
                  <br />
                  <a href="cart-penjualan-langsung.html" class="btn btn-outline-primary text-sm-left text-dark">
                    <p class="text-dark">
                      Penjualan MarketPlace <br />
                      (Shopee, Tokopedia, Lazada, dll)
                    </p>
                  </a>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <a href="customer-order-details.html">
                    <button type="button" class="btn btn-primary">
                      Pembayaran
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
		  
<script>
      const myModal = document.getElementById("exampleModal");
      window.addEventListener("DOMContentLoaded", () => {
        myModal.show();
      });
	  
      const myModal2 = document.getElementById("exampleModal2");
      window.addEventListener("DOMContentLoaded", () => {
        myModal2.show();
      });
</script>