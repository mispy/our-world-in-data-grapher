;( function() {
	
	"use strict";

	App.Views.Chart.Map.MapControls = Backbone.View.extend({

		el: "#map-chart-tab .map-controls-header",
		events: {
			"input .target-year-control input": "onTargetYearInput",
			"change .target-year-control input": "onTargetYearChange",
			"click .region-control li": "onRegionClick",
			"click .settings-control input": "onSettingsInput",
		},

		initialize: function( options ) {

			this.dispatcher = options.dispatcher;

			var mapConfig = App.ChartModel.get( "map-config" );
			
			//year slider
			this.$targetYearControl = this.$el.find( ".target-year-control" );
			this.$targetYearLabel = this.$targetYearControl.find( ".target-year-label" );
			this.$targetYearInput = this.$targetYearControl.find( "input" );
			
			//region selector
			this.$regionControl = this.$el.find( ".region-control" );
			this.$regionControlLabel = this.$regionControl.find( ".region-label" );
			this.$regionControlLis = this.$regionControl.find( "li" );

			App.ChartModel.on( "change", this.onChartModelChange, this );
			App.ChartModel.on( "change-map", this.onChartModelChange, this );

			return this.render();
		},

		render: function() {
			
			var mapConfig = App.ChartModel.get( "map-config" );
			
			this.$targetYearLabel.text( mapConfig.targetYear );
			this.$regionControlLabel.text( mapConfig.projection );

			this.$targetYearInput.attr( "min", mapConfig.minYear );
			this.$targetYearInput.attr( "max", mapConfig.maxYear );
			this.$targetYearInput.attr( "step", mapConfig.timeInterval );
			this.$targetYearInput.val( parseInt( mapConfig.targetYear, 10 ) );

			this.$regionControlLis.removeClass( "highlight" );
			this.$regionControlLis.filter( "." + mapConfig.projection + "-projection" ).addClass( "highlight" );

		},

		onChartModelChange: function( evt ) {
			this.render();
		},
		
		onTargetYearInput: function( evt ) {
			var $this = $( evt.target ),
				targetYear = parseInt( $this.val(), 10 );
			this.$targetYearLabel.text( targetYear, false, "change-map" );
		},

		onTargetYearChange: function( evt ) {
			var $this = $( evt.target ),
				targetYear = parseInt( $this.val(), 10 );
			App.ChartModel.updateMapConfig( "targetYear", targetYear, false, "change-map" );
			this.render();
		},

		onRegionClick: function( evt ) {
			var $this = $( evt.target );
			App.ChartModel.updateMapConfig( "projection", $this.text(), false, "change-map" );
			this.render();
		},

		onSettingsInput: function( evt ) {
			var $this = $( evt.target ),
				mode = ( $this.is( ":checked" ) )? "specific": "no-interpolation";
			App.ChartModel.updateMapConfig( "mode", mode, false, "change-map" );
			this.render();
		}

	});

})();