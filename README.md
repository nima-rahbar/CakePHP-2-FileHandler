# CakePHP-2-FileHandler
<h2>CAKEPHP 2.x File Upload Handlers Component.</h2>

<h3>Usage:</h3>

<p>Follow description below in your action's controller.</p>
<ol>
<li>Add</li>
  <p>$this->request->data['Model']['fieldname'] = $this->FileHandler->fileAdd(<br/>
	  &nbsp;&nbsp;$this->request->data['Model']['fieldname']<br/>
	);</p>

<li>Edit</li>
  <p>$fields = $this->Model->read(NULL, $id);<br/>
	$this->request->data['Model']['field'] = $this->FileHandler->fileEdit(<br/>
		&nbsp;&nbsp;$fields['Model'],<br/>
		&nbsp;&nbsp;$id,<br/>
		&nbsp;&nbsp;$this->request->data['Model']['field'],<br/>
		&nbsp;&nbsp;$fieldname(optional)<br/>
	);</p>
	
<li>Delete</li>
  <p>
  $fields = $this->Model->read(NULL, $id);<br/>
	$this->FileHandler->fileEdit(<br/>
		&nbsp;&nbsp;$fields['Model'],<br/>
		&nbsp;&nbsp;$fieldname(optional)<br/>
	);
	</p>
</ol>
