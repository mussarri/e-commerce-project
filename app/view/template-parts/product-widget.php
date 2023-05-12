<div class="product-widget-list">
    <?php
    global $db, $row;
    $query = $db->prepare('SELECT campaign_id FROM ecommerce.product_campaigns WHERE product_id=:product_id');
    $query->execute([
        'product_id' => $row['id']
    ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
        $result = 0;
    } else {
        $result = $result['campaign_id'];
    }
    ?>
    <?php if ($result == 1): ?>
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
    <?php endif; ?>
    <?php if ($result == 2): ?>
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
</div>