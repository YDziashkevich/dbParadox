

<form class="form-horizontal" method="post">
    <fieldset>

        <!-- Form Name -->
        <legend>time editor</legend>

        <div class="row">
            <div class="span12">
                <!--  time of the event-->
                <div class="centerEdit">
                    <div class="control-group">
                        <label class="control-label" for="time1"></label>
                        <div class="controls">
                            <div class="input-prepend">
                                <span class="add-on">time of the event:</span>
                                <input id="time1" name="time1" class="input-large" placeholder="{{TIME1}}" type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="span12">
                <!-- Enter name-->
                <div class="centerEdit">
                    <div class="control-group">
                        <label class="control-label" for="time2"></label>
                        <div class="controls">
                            <div class="input-prepend">
                                <span class="add-on">passage time:</span>
                                <input id="time2" name="time2" class="input-large" placeholder="{{TIME2}}" type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Submit user-->
            <div class="span12">
                <!-- Button -->
                <div class="center">
                    <div class="control-group">
                        <label class="control-label" for="okTime"></label>
                        <div class="controls">
                            <input id="okTime" name="okTime" class="btn btn-primary" type="submit" value="OK">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="span12">
                <div id="errorsEdit">

                </div>
            </div>
        </div>

        <div class="row">
            <!-- new events -->
            <div class="span12">
                <div class="center">
                    <div class="control-group">
                        <label class="control-label" for="newEvents">new events:</label>
                        <div class="controls">
                            <select id="newEvents" name="newEvents" class="input-xlarge" multiple="multiple">
                                <option>{{NEW EVENT 1}}</option>
                                <option>{{NEW EVENT 2}}</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Submit events-->
            <div class="span12">
                <!-- Button -->
                <div class="center">
                    <div class="control-group">
                        <label class="control-label" for="editNewEvent"></label>
                        <div class="controls">
                            <input id="editNewEvent" name="editNewEvent" class="btn btn-primary" type="submit" value="edit">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="span12">
                <div id="errorsEdit">

                </div>
            </div>
        </div>

        <div class="row">
            <!-- Submit events-->
            <div class="span12">
                <!-- Button -->
                <div class="center">
                    <div class="control-group">
                        <label class="control-label" for="return"></label>
                        <div class="controls">
                            <a id="return" href="#">to mainpage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </fieldset>
</form>
