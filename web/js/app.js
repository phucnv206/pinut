(function () {
    var app = angular.module('pinut', ['ngSanitize']);
    app.controller('MainController', function ($http, $window, $location, $timeout) {
        var waypoints = $('.product').waypoint(function(direction) {
            $('.product-item').each(function (index) {
                var elm = $(this);
                $timeout(function () {
                    elm.addClass('animated flipInY');
                }, index * 100);
            });
        }, {
            offset: 380
        });
        var self = this;
        self.init = function () {
            self.selectedCategory = undefined;
            self.pageIndex = 0;
            self.pageSize = 3;
            self.contact = {
                company: '',
                email: '',
                phone: '',
                message: ''
            };
            self.apiListSlide();
            self.apiListPage();
            self.apiListCategory();
            self.apiListProduct();
        };
        self.apiListSlide = function () {
            $http.get('/api/slide/list').then(function successCallback(response) {
                self.slides = response.data;
                $timeout(function () {
                    self.loaded = true;
                }, 500);
            }, function errorCallback(response) {
            });
        };
        self.apiListPage = function () {
            $http.get('/api/page/list').then(function successCallback(response) {
                self.pages = response.data;
            }, function errorCallback(response) {
            });
        };
        self.apiListCategory = function () {
            $http.get('/api/category/list').then(function successCallback(response) {
                self.categories = response.data;
            }, function errorCallback(response) {
            });
        };
        self.apiListProduct = function () {
            $http.get('/api/product/list').then(function successCallback(response) {
                self.products = response.data;
            }, function errorCallback(response) {
            });
        };
        self.detailProduct = function (e, index) {
            e.preventDefault();
            self.selectedProduct = index;
            $('#product-detail').modal('show');
        };
        self.setCategory = function (e, id) {
            e.preventDefault();
            self.pageIndex = 0;
            self.selectedCategory = id;
        };
        self.nextPage = function (e) {
            e.preventDefault();
            if (self.pageIndex + self.pageSize < self.filtered.length) {
                self.pageIndex++;
            }
        };
        self.prevPage = function (e) {
            e.preventDefault();
            if (self.pageIndex > 0) {
                self.pageIndex--;
            }
        };
        self.detailPage = function (e, id) {
            self.selectedPage = id;
            $('#page-detail').modal('show');
        };
        self.sendContact = function () {
            self.contact[$('meta[name=csrf-param]').attr('content')] = $('meta[name=csrf-token]').attr('content');
            self.contactSubmitting = true;
            self.contactErrors = [];
            self.contactMessage = '';
            $http.post('/api/contact/send', self.contact).then(function successCallback(response) {
                var data = response.data;
                if ('errors' in data) {
                    angular.forEach(data.errors, function(value, key) {
                        this.push(value);
                    }, self.contactErrors);
                } else {
                    self.contact = {
                        company: '',
                        email: '',
                        phone: '',
                        message: ''
                    };
                    self.contactMessage = data.message;
                }
                $('.error-message').fadeIn();
                $timeout(function () {
                    $('.error-message').fadeOut();
                }, 3000);
                self.contactSubmitting = false;
            }, function errorCallback(response) {
                self.contactSubmitting = false;
            });
        };
        self.changeLanguage = function (lang) {
            $window.location.href = '/location?lang=' + lang + '&return=' + $location.path();
        };
        self.init();
    });
})();