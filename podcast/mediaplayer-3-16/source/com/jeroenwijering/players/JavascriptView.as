﻿/**
* Javascript user interface management of the players MCV pattern.
*
* @author	Jeroen Wijering
* @version	1.5
**/


import com.jeroenwijering.players.*;
import flash.external.ExternalInterface;


class com.jeroenwijering.players.JavascriptView extends AbstractView {


	/** Previous loading value **/
	private var loads:Number;
	/** Previous elapsed value **/
	private var elaps:Number;
	/** Previous remaining value **/
	private var remain:Number;
	/** Previous state value **/
	private var state:Number = 4;
	/** Status change abbreviations **/
	private var statuses:Array = new Array(
		'PAUSED',
		'BUFFERING',
		'PLAYING',
		'COMPLETE',
		'NOT STARTED'
	);


	/** Constructor **/
	function JavascriptView(ctr:AbstractController,cfg:Object,fed:Object) {
		super(ctr,cfg,fed);
		if(ExternalInterface.available) {
			ExternalInterface.addCallback("sendEvent",this,sendEvent);
		}
	};


	/** Override of the update receiver; forwarding all to javascript **/
	public function getUpdate(typ:String,pr1:Number,pr2:Number) { 
		if(ExternalInterface.available) {
			switch(typ) {
				case "load":
					if(Math.round(pr1) != loads) {
						loads = Math.round(pr1);
						ExternalInterface.call("getUpdate",typ,loads,pr2,
							config["javascriptid"]);
					}
					break;
				case "time":
					if(Math.round(pr1)!=elaps || Math.round(pr2)!=remain) {
						elaps = Math.round(pr1);
						remain = Math.round(pr2);
						ExternalInterface.call("getUpdate",typ,elaps,remain,
							config["javascriptid"]);
					}
					break;
				case "item":
					ExternalInterface.call("getUpdate",typ,pr1,pr2,
						config["javascriptid"]);
					break;
				case "state":
					sendStatusChange(pr1);
					ExternalInterface.call("getUpdate",typ,pr1,pr2,
						config["javascriptid"]);
					break;
				default:
					ExternalInterface.call("getUpdate",typ,pr1,pr2,
						config["javascriptid"]);
					break;
			}
		}
	};


	/** state change function for longtail **/
	private function sendStatusChange(stt) {
		if(!(state == 3 && stt == 0)) {
			ExternalInterface.call("playerStatusChange",
				statuses[state],statuses[stt]);
		}
		state = stt;
	};


}