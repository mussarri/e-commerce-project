<div class="product-widget-list">
    <div component-id="11" class="corporate-invoice-widget">
        <div class="corporate-invoice-header">
            <div class="corporate-invoice-icon"></div>
            <div>Kurumsal Fatura</div>
        </div>
        <div class="corporate-invoice-description"><span>Bu ürünü <span
                    class="corporate-invoice-bold">Kurumsal Fatura</span> ile satın alabilirsiniz.
                                <span class="corporate-invoice-link"> <a href="#ex1" rel="modal:open">İncele</a><i
                                        class="i-arrow-right"></i></span></span>
        </div>
    </div>
    <?php if ($row['price'] > 1000): ?>
        <div class="onboarding">
            <div>
                <section component-id="12" class="campaigns-widget widget orange"><h2
                        class="widget-title">
                        ÜRÜNÜN KAMPANYALARI</h2>
                    <div class="widget-row"><a class="flex"
                                               title="100 TL ve Üzeri Kargo Bedava (Satıcı Karşılar)"
                                               href="#"><i class="fa-solid fa-box"></i><span
                                class="campaign-name">100 TL ve Üzeri Kargo Bedava (Satıcı Karşılar)</span><i
                                class="fa fa-angle-right"></i></a></div>
                </section>
            </div>
        </div>
    <?php endif; ?>
    <section class="seller-widget widget">
        <div class="widget-title product-seller-line">
            <div class="pr-mb">
                <div class="pr-mb-mn">
                    <div class="seller-container">
                        <div class="seller-name-text" title="MegaTeknoloji">MegaTeknoloji</div>
                    </div>
                    <div class="sl-pn" style="background-color: rgb(4, 155, 36);">9.4</div>

                </div>
            </div>
            <img alt="merchant-badge-image" loading="lazy" class="merchant-badge"
                 src="https://cdn.dsmcdn.com/seller-store/resources/basarili_satici.svg">
            <img
                alt="merchant-badge-image" loading="lazy" class="merchant-badge"
                src="https://cdn.dsmcdn.com/seller-store/resources/hizli-satici.svg">
            <button class="follow-btn">Takip Et</button>
            <a class="widget-row flex" href="<?= site_url('shop/') ?>>"><i
                    class="fa-solid fa-shop"></i>
                <div><span>Mağazayı Gör</span><span class="seller-follower-count">1.1B Takipçi</span>
                </div>
                <i class="fa fa-angle-right"></i></a>
        </div>

    </section>

</div>