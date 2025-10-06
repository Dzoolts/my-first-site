<?php

test('that true is true', function () {
    expect(true)->toBeTrue();
});

test('that false is false', function () {
    expect(false)->toBeFalse();
});

// rossz test
// test('that true is false', function () {
//     expect(true)->toBeFalse();
// });
