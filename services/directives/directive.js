angular.module("studyModule")
.directive('triButton', function(){
    return {
        scope: {counter: "=counter"},
        link: function(scope, elem, attr) {
            elem.on('click', function(e) {
                console.log(e.target.innerText);
                scope.$apply(function() {
                    scope.counter++;
                });

            })
        }

    };

})