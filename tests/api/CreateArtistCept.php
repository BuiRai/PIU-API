<?php
$I = new ApiTester($scenario);
$I->wantTo('Create an Artist via API');
$I->sendPOST('/artists', ['name' => 'example']);
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK); // 200
$I->seeResponseIsJson();
$I->seeResponseContainsJson([
    'data' => [
        'name' => 'example'
    ]
]);
