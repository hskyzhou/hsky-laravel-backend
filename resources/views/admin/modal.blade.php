{{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" ng-controller="TableController">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    </div>
  </div>
</div> --}}

{{-- <div ng-controller="TableController">
    <script type="text/ng-template" id="myModalContent.html">
        <div class="modal-header">
            <h3 class="modal-title">按时打算</h3>
        </div>
        <div class="modal-body">
            <ul>
                <li ng-repeat="item in items">
                    <a href="#" ng-click="$event.preventDefault(); selected.item = item">@{{ item }}</a>
                </li>
            </ul>
            Selected: <b>@{{ selected.item }}</b>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="button" ng-click="ok()">OK</button>
            <button class="btn btn-warning" type="button" ng-click="cancel()">Cancel</button>
        </div>
    </script>

    <button type="button" class="btn btn-default" ng-click="open()">Open me!</button>
    <button type="button" class="btn btn-default" ng-click="open('lg')">Large modal</button>
    <button type="button" class="btn btn-default" ng-click="open('sm')">Small modal</button>
    <button type="button" class="btn btn-default" ng-click="toggleAnimation()">Toggle Animation (@{{ animationsEnabled }})</button>
    <div ng-show="selected">Selection from a modal: @{{ selected }}</div>
</div> --}}