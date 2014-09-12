

<form class="form-horizontal" method="post">
    <fieldset>
        <!-- Form Name -->
        <legend>Select date and user</legend>

        <div class="row">
            <div class="span12">
                <!-- Enter name-->
                <div class="center">
                    <div class="control-group">
                        <label class="control-label" for="name"></label>
                        <div class="controls">
                            <div class="input-prepend">
                                <span class="add-on">name:</span>
                                <input id="name" name="name" class="input-xlarge" placeholder="enter name here" type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Select data-->
            <div class="span12">
                <div class="center">
                    <div class="control-group">
                        <label class="control-label" for="data"></label>
                        <div class="controls">
                            <div class="input-prepend">
                                <span class="add-on">data:</span>
                                <input id="data" name="data" class="input-xlarge" placeholder="" type="date">
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
                        <label class="control-label" for="okUser"></label>
                        <div class="controls">
                            <input id="okUser" name="okUser" class="btn btn-primary" type="submit" value="OK">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="span12">
                <div id="errors">
                    {{ERRORS}}
                </div>
            </div>
        </div>

    </fieldset>
</form>
<!----------------------------------------------------------------------------------------------->
<form class="form-horizontal" method="post">
    <fieldset>
        <!-- Form Name -->
        <legend>Select event</legend>

        <div class="row">
            <div class="span12">
                <div class="center">
                    <!-- Events -->
                    <div class="control-group">
                        <label class="control-label" for="checkboxes">Events:</label><br/>
                        <div class="controls">

                            <label class="checkbox" for="checkboxes-0">
                                <input id="selectEvents" type="checkbox" name="events" id="checkboxes-0" value="Option one">
                                <p><span class="doorEvent">{{DOOR}}</span><span class="directionEvent">{{DIRECTION}}</span><span class="timeEvent">{{TIME}}</span></p>
                            </label>

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
                        <label class="control-label" for="okEvent"></label>
                        <div class="controls">
                            <input id="okEvent" name="okEvent" class="btn btn-primary" type="submit" value="edit">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="span12">
                <div id="errors">
                    {{ERORRS}}
                </div>
            </div>
        </div>

    </fieldset>
</form>
