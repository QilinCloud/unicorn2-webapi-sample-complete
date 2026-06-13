<?php
declare(strict_types=1);

/**
 * Creates the OTTO-backed sample client.
 *
 * @return ApiWebOttoClient Client configured through config.php and environment variables.
 */
function apiWebCompleteOttoClient(): ApiWebOttoClient
{
    return new ApiWebOttoClient();
}

/**
 * Gets the best source object for reference-based article suboperations.
 *
 * @param Result $result Current result.
 * @param Request|null $request Parsed ApiWeb request.
 * @return mixed Article reference or current item.
 */
function apiWebCompleteReferenceOrItem(Result $result, ?Request $request)
{
    return $request !== null && $request->reference !== null ? $request->reference : $result->Item;
}

/**
 * Validates OTTO credentials for the complete ApiWeb sample.
 *
 * @param Result $result Result that receives the validation response.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function validateCredentials(Result $result, ?Request $request = null): void
{
    try {
        $result->Item = apiWebCompleteOttoClient()->validateCredentials();
    } catch (Throwable $exception) {
        $result->Item = (object)array(
            'Valid' => false,
            'Message' => 'OTTO credential validation failed: ' . $exception->getMessage()
        );
    }
}

/**
 * Returns the full OTTO-backed ApiWeb capability set.
 *
 * @param Result $result Result that receives the capabilities DTO.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function getCapabilities(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () {
        return apiWebCompleteOttoClient()->capabilities(false);
    });
}

/**
 * Returns OTTO shipping profiles.
 *
 * @param Result $result Result that receives shipping profile names.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function getShippingProfiles(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () {
        return apiWebCompleteOttoClient()->shippingProfiles();
    });
}

/**
 * Creates an OTTO product variation from an ApiWeb article payload.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function addArticle(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () use ($result) {
        return apiWebCompleteOttoClient()->upsertArticle($result->Item);
    });
}

/**
 * Updates an OTTO product variation from an ApiWeb article payload.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function setArticle(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () use ($result) {
        return apiWebCompleteOttoClient()->upsertArticle($result->Item);
    });
}

/**
 * Deactivates an OTTO product variation.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function delArticle(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () use ($result) {
        return apiWebCompleteOttoClient()->deactivateArticle($result->Item);
    });
}

/**
 * Updates OTTO stock through availability quantities.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function setStock(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () use ($result) {
        return apiWebCompleteOttoClient()->setStock($result->Item);
    });
}

/**
 * Updates OTTO price data.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function setPrice(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () use ($result) {
        return apiWebCompleteOttoClient()->setPrice($result->Item);
    });
}

/**
 * Updates OTTO processing time and delivery information.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function setProcessingTime(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () use ($result) {
        return apiWebCompleteOttoClient()->setProcessingTime($result->Item);
    });
}

/**
 * Acknowledges cross-selling creation because OTTO handles this through product data, not a standalone endpoint.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function addArticleCrossselling(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () use ($result) {
        return apiWebCompleteOttoClient()->acknowledgeNoOp($result->Item, 'OTTO does not expose standalone cross-selling creation; model this in product data if needed.');
    });
}

/**
 * Acknowledges cross-selling deletion because OTTO handles this through product data, not a standalone endpoint.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function delArticleCrossselling(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () use ($result) {
        return apiWebCompleteOttoClient()->acknowledgeNoOp($result->Item, 'OTTO does not expose standalone cross-selling deletion; update product data if needed.');
    });
}

/**
 * Updates the referenced OTTO product after an article attribute was added.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function addArticleAttribut(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () use ($result, $request) {
        return apiWebCompleteOttoClient()->upsertArticle(apiWebCompleteReferenceOrItem($result, $request));
    });
}

/**
 * Updates the referenced OTTO product after an article attribute was changed.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function setArticleAttribut(Result $result, ?Request $request = null): void
{
    addArticleAttribut($result, $request);
}

/**
 * Updates the referenced OTTO product after an article attribute was deleted.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function delArticleAttribut(Result $result, ?Request $request = null): void
{
    addArticleAttribut($result, $request);
}

/**
 * Updates the referenced OTTO product after an article image was added.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function addArticleImage(Result $result, ?Request $request = null): void
{
    addArticleAttribut($result, $request);
}

/**
 * Updates the referenced OTTO product after an article image was changed.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function setArticleImage(Result $result, ?Request $request = null): void
{
    addArticleAttribut($result, $request);
}

/**
 * Updates the referenced OTTO product after an article image was deleted.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function delArticleImage(Result $result, ?Request $request = null): void
{
    addArticleAttribut($result, $request);
}

/**
 * Acknowledges category creation because OTTO categories are portal categories and cannot be created by partners.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function addCategory(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () use ($result) {
        return apiWebCompleteOttoClient()->acknowledgeNoOp($result->Item, 'OTTO portal categories are read-only; category assignment belongs into the product payload.');
    });
}

/**
 * Acknowledges category update because OTTO categories are portal categories and cannot be changed by partners.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function setCategory(Result $result, ?Request $request = null): void
{
    addCategory($result, $request);
}

/**
 * Acknowledges category deletion because OTTO categories are portal categories and cannot be deleted by partners.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function delCategory(Result $result, ?Request $request = null): void
{
    addCategory($result, $request);
}

/**
 * Updates the referenced OTTO product after a category link was added.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function addCategoryLink(Result $result, ?Request $request = null): void
{
    addArticleAttribut($result, $request);
}

/**
 * Updates the referenced OTTO product after a category link was removed.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function delCategoryLink(Result $result, ?Request $request = null): void
{
    addArticleAttribut($result, $request);
}

/**
 * Returns OTTO portal categories.
 *
 * @param Result $result Result that receives category tree roots.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function getPortalCategories(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () {
        return apiWebCompleteOttoClient()->portalCategories();
    });
}

/**
 * Downloads OTTO orders and maps them to Unicorn order DTOs.
 *
 * @param Result $result Result that receives order collection entries.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function getOrders(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () use ($request) {
        return apiWebCompleteOttoClient()->getOrders($request);
    });
}

/**
 * Sends OTTO shipment information.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function setOrderSend(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () use ($result) {
        return apiWebCompleteOttoClient()->setOrderSend($result->Item);
    });
}

/**
 * Acknowledges paid notifications because OTTO orders are paid through OTTO marketplace settlement.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function setOrderPaid(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () use ($result) {
        return apiWebCompleteOttoClient()->acknowledgeNoOp($result->Item, 'OTTO payment state is marketplace-owned; ApiWeb acknowledges the paid notification for Unicorn workflow continuity.');
    });
}

/**
 * Sends an OTTO order cancellation.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function setOrderCancelled(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () use ($result) {
        return apiWebCompleteOttoClient()->setOrderCancelled($result->Item);
    });
}

/**
 * Sends accepted return data to OTTO.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function setReturned(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () use ($result) {
        return apiWebCompleteOttoClient()->setReturned($result->Item);
    });
}

/**
 * Downloads OTTO return announcements.
 *
 * @param Result $result Result that receives return announcement entries.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function getReturned(Result $result, ?Request $request = null): void
{
    $days = (int)apiWebReadProperty($result->Item, 'Days', '30');
    ApiWebOttoClient::guard($result, function () use ($days) {
        return apiWebCompleteOttoClient()->getReturned($days);
    });
}

/**
 * Returns fulfillment-by-marketplace stock information when available.
 *
 * @param Result $result Result that receives stock collection entries.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function getFulfillmentByMarketplaceWarehouse(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () {
        return apiWebCompleteOttoClient()->fulfillmentWarehouse();
    });
}

/**
 * Acknowledges invoice upload because OTTO invoice documents are normally downloaded through receipts.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function uploadInvoice(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () use ($result) {
        return apiWebCompleteOttoClient()->acknowledgeNoOp($result->Item, 'OTTO invoice handling is receipt-download oriented in this sample; uploadInvoice is acknowledged.');
    });
}

/**
 * Acknowledges refund file upload because structured refund data is sent through price-reductions.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function uploadRefund(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () use ($result) {
        return apiWebCompleteOttoClient()->acknowledgeNoOp($result->Item, 'OTTO refund upload is handled through uploadRefundData/price-reductions in this sample.');
    });
}

/**
 * Sends structured refund data through OTTO price-reductions.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function uploadRefundData(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () use ($result) {
        return apiWebCompleteOttoClient()->uploadRefundData($result->Item);
    });
}

/**
 * Downloads OTTO invoices through receipts.
 *
 * @param Result $result Result that receives invoice collection entries.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function downloadInvoices(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () use ($result) {
        return apiWebCompleteOttoClient()->downloadReceipts($result->Item, false);
    });
}

/**
 * Downloads OTTO refunds through receipts.
 *
 * @param Result $result Result that receives refund collection entries.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function downloadRefunds(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () use ($result) {
        return apiWebCompleteOttoClient()->downloadReceipts($result->Item, true);
    });
}

/**
 * Acknowledges a full purge request.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function purge(Result $result, ?Request $request = null): void
{
    ApiWebOttoClient::guard($result, function () use ($result) {
        return apiWebCompleteOttoClient()->acknowledgeNoOp($result->Item, 'OTTO does not expose a destructive full purge endpoint; deactivate or update concrete products instead.');
    });
}

/**
 * Acknowledges an article purge request.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function purgeArticles(Result $result, ?Request $request = null): void
{
    purge($result, $request);
}

/**
 * Acknowledges a category purge request.
 *
 * @param Result $result Result that receives success state.
 * @param Request|null $request Parsed ApiWeb request.
 * @return void
 */
function purgeCategories(Result $result, ?Request $request = null): void
{
    addCategory($result, $request);
}
