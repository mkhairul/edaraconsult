Received the following question.<br/><br/>


First Name: <?php echo $request->input('firstname'); ?><br/>

Last Name: <?php echo $request->input('lastname'); ?><br/>

Business Name: <?php echo $request->input('business-name'); ?><br/>

Email: <?php echo $request->input('email'); ?><br/>

Town/City: <?php echo $request->input('towncity'); ?><br/>

Country: <?php echo $request->input('country'); ?><br/>

No of Staff in your business: <?php echo $request->input('no_of_employee'); ?><br/>

Topic: <?php echo implode(',', $request->input('topic')); ?><br/>

Where did you heard about ESC from?: <?php echo $request->input('ref'); ?><br/>

Question: <?php echo $request->input('question'); ?><br/>