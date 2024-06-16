<style>

  .text-field {
    position: relative;
  }
  
  .text-field-label {
    color: #212529;
    font-size: 14px;
    font-weight: normal;
    position: absolute;
    pointer-events: none;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    padding: 0 5px;
    background: #fff;
    transition: 0.2s ease all;
    -moz-transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all;
  }
  
  .text-field-input {
    font-size: 14px;
    display: block;
    width: 100%;
    height: 45px;
    padding: 0 10px;
    background: #fff;
    color: #212529;
    border: 1px solid #ced4da;
    box-sizing: border-box;
  }
  
  .text-field-input:focus {
    outline: none;
  }
  
  .text-field-input:focus ~ .text-field-label,
  .text-field-input:not(:placeholder-shown) ~ .text-field-label {
    top: 0px;
    font-size: 12px;
  }
  
  </style>


<div class="text-field">
    <input class="text-field-input" type="{{$type}}" placeholder=" " name="{{$name}}">
    <label class="text-field-label">{{$label}}</label>

</div>
