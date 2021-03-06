;(function() {	
	"use strict";
	owid.namespace("App.Views.Form.AddDataSectionView");
	
	var	SelectVarPopup = App.Views.UI.SelectVarPopup,
		SettingsVarPopup = App.Views.UI.SettingsVarPopup;

	App.Views.Form.AddDataSectionView = Backbone.View.extend({
		el: "#form-view #data-tab .add-data-section",
		events: {
			"click .add-data-btn": "onAddDataBtn",
		},

		initialize: function(options) {
			this.dispatcher = options.dispatcher;
			this.selectVarPopup = new SelectVarPopup(options);
			this.settingsVarPopup = new SettingsVarPopup();
			this.settingsVarPopup.init(options);

			App.ChartVariablesCollection.on("reset", this.onVariableReset, this);
			App.ChartVariablesCollection.on("add", this.onVariableAdd, this);
			App.ChartVariablesCollection.on("remove", this.onVariableRemove, this);

			this.dispatcher.on( "variable-label-moved", this.onVariableLabelMoved, this );
			this.dispatcher.on( "dimension-setting-update", this.onDimensionSettingUpdate, this );

			this.render();
		},

		onAddDataBtn: function() {
			this.selectVarPopup.show();
		},

		render: function() {
			this.$dd = this.$el.find(".dd");
			this.$ddList = this.$dd.find(".dd-list");
			this.$dd.nestable();

			this.onVariableReset();
		},

		refreshHandlers: function() {
			var $removeBtns = this.$ddList.find(".fa-close");
			$removeBtns.on( "click", $.proxy( this.onRemoveBtnClick, this ) );
			this.$dd.nestable();
		},


		onVariableReset: function() {
			var models = App.ChartVariablesCollection.models;
			_.each(models, function(v, i) {
				this.onVariableAdd(v);
			}.bind(this));
		},

		onVariableAdd: function( model ) {
			//if there's empty element, remove it
			this.$el.find( ".dd-empty" ).remove();
			//refetch dd-list - needed if there was something removed
			this.$ddList = this.$dd.find( ".dd-list" );

			if(!this.$dd.find(".dd-list").length) {
				//dd-list has been removed by nestable
				var $ddList = $("<ol class='dd-list'></ol>");
				this.$dd.append($ddList);
				this.$ddList = this.$dd.find(".dd-list");
			}

			//have default target year for scatter plot
			var defaultPeriod = (App.ChartModel.get("chart-type") == App.ChartType.ScatterPlot ) ? "single" : "all",
				defaultMode = (App.ChartModel.get("chart-type") == App.ChartType.ScatterPlot) ? "specific" : "closest",
				defaultTargetYear = 2000,
				defaultMaxAge = 5,
				defaultTolerance = 5;

			var $li = $("<li class='variable-label dd-item' data-unit='" + model.get("unit") + "' data-period='" + defaultPeriod + "' data-tolerance='" + defaultTolerance + "' data-maximum-age='" + defaultMaxAge + "' data-mode='" + defaultMode + "' data-target-year='" + defaultTargetYear + "' data-variable-id='" + model.get("id") + "'><div class='dd-handle'><div class='dd-inner-handle'><span class='variable-label-name'>" + model.get("name") + "</span><span class='variable-label-input'><input class='form-control'/><i class='fa fa-check'></i><i class='fa fa-times'></i></div></div><a href='' class='variable-setting-btn'><span class='fa fa-cog' title='Setting variable'></span></a><span class='fa fa-close'></span></li>"),
				$settings = $li.find(".variable-setting-btn");
			this.$ddList.append($li);

			$settings.on("click", $.proxy(this.onSettingsClick, this));

			this.refreshHandlers();
			this.updateVarIcons();

			this.$el.find(".form-section-desc").removeClass( "hidden" );
		},

		onRemoveBtnClick: function( evt ) {
			evt.preventDefault();
			var $btn = $( evt.currentTarget ),
				$label = $btn.parents( ".variable-label" ),
				variableId = $label.attr( "data-variable-id" );
			App.ChartVariablesCollection.remove( variableId );
		},

		onVariableLabelMoved: function() {
			//check if there's any variable label left, if not insert empty dd placeholder
			if( !this.$el.find( ".variable-label" ).length ) {
				this.$el.find( ".dd-list" ).replaceWith( "<div class='dd-empty'></div>" );
			}
		},

		onSettingsClick: function(evt) {
			evt.stopImmediatePropagation();
			evt.preventDefault();

			var $btn = $( evt.currentTarget ),
				$parent = $btn.parent();

			this.settingsVarPopup.show( $parent );
		},

		onDimensionSettingUpdate: function( data ) {
			//find updated variable
			var $variableLabel = $( ".variable-label[data-variable-id='" + data.variableId + "']" );
			//update all attributes
			for (var i in data) {
				if (i == "name") {
					$variableLabel.find(".variable-label-name").text(data[i]);
				} else if (data.hasOwnProperty(i) && i !== "variableId") {
					var attrName = "data-" + i,
						attrValue = data[ i ];
					$variableLabel.attr( attrName, attrValue );
				}
			} 

			//if sync period values for all variables 
			var $variableLabels = $( ".variable-label" );
			$variableLabels.attr( "data-period", data.period );

			this.updateVarIcons();

			//hide popup
			this.settingsVarPopup.hide();

			//trigger updating model
			this.dispatcher.trigger( "dimension-update" );

		},

		updateVarIcons: function() {
			
			var $variableLabels = $( ".variable-label" );

			//update icons
			$.each( $variableLabels, function( i, v ) {

				var $label = $( v ),
					$periodIcon = $label.find( ".period-icon" ),
					$modeIcon = $label.find( ".mode-icon" ),
					$numberIcon = $label.find( ".number-icon" );

				//mode
				var period = $label.attr( "data-period" ),
					mode = $label.attr( "data-mode" );
				if( period === "all" ) {
					$periodIcon.addClass( "fa-arrows-h" );
					$periodIcon.removeClass( "fa-circle" );
				} else {
					$periodIcon.removeClass( "fa-arrows-h" );
					$periodIcon.addClass( "fa-circle" );
				}

				if( period === "single" && mode === "specific" ) {
					$numberIcon.html( $label.attr( "data-target-year" ) + "/" + $label.attr( "data-tolerance" ) );
				} else if( period == "single" && mode === "latest" ) {
					$numberIcon.html( "<span class='fa fa-long-arrow-right'></span>/" + $label.attr( "data-maximum-age" ) );
				} else if( period == "all" && mode === "closest" ) {
					$numberIcon.html( $label.attr( "data-tolerance" ) );
				} else if( period == "all" && mode === "latest" ) {
					$numberIcon.html( "<span class='fa fa-long-arrow-right'></span>/" + $label.attr( "data-maximum-age" ) );
				}
			} );

		},

		onVariableRemove: function( model ) {
			var $liToRemove = $( ".variable-label[data-variable-id='" + model.get( "id" ) + "']" );
			$liToRemove.remove();

			if (App.ChartVariablesCollection.models.length == 0) {
				this.$el.find( ".form-section-desc" ).addClass( "hidden" );
			}
		}

	});
})();