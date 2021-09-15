

   <div class="row">

      <div class="col-md-6">

         <div class="form-group">

            {!! Form::label('name', 'Module Name', ['class' => 'font-weight-bold']) !!}

            {!! Form::text('name', null, array('class'=>'form-control', 'id'=>'name', 'placeholder'=>'Module Name')) !!}

         </div>

      </div>

      <div class="col-md-6">

         <div class="form-group">

            {!! Form::label('term', 'Module Term', ['class' => 'font-weight-bold']) !!}

            {!! Form::text('term', null, array('class'=>'form-control', 'id'=>'term', 'placeholder'=>'Module Term')) !!}

         </div>

      </div>

   </div>

   <div class="row">

      <div class="col-md-12">

        <div class="form-group">

            @php

            $fields = array(

                0 => 'No',

                1 => 'Yes',

            );

            @endphp

            {!! Form::label('is_slug', 'Module Slug', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('is_slug', $fields, null, array('class'=>'form-control', 'id'=>'is_slug')) !!}

         </div>

        

      </div>



      <div class="col-md-4">

        <div class="form-group">

            

            {!! Form::label('is_menu', 'Module Menus', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('is_menu', $fields, null, array('class'=>'form-control', 'id'=>'is_menu')) !!}

         </div>

        

      </div>


      <div class="col-md-4">

        <div class="form-group">

            

            {!! Form::label('is_preview', 'Module Preview', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('is_preview', $fields, null, array('class'=>'form-control', 'id'=>'is_preview')) !!}

         </div>

        

      </div>



      <div class="col-md-4">

        <div class="form-group">

            {!! Form::label('is_description', 'Module Description', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('is_description', $fields, null, array('class'=>'form-control', 'id'=>'is_description')) !!}

         </div>

        

      </div>

      <div class="col-md-4">

        <div class="form-group">

            {!! Form::label('is_highlights', 'Module Highlights', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('is_highlights', $fields, null, array('class'=>'form-control', 'id'=>'is_highlights')) !!}

         </div>

        

      </div>



      <div class="col-md-4">

        <div class="form-group">

            {!! Form::label('is_seo', 'Module Seo', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('is_seo', $fields, null, array('class'=>'form-control', 'id'=>'is_seo')) !!}

         </div>

        

      </div>



      <div class="col-md-4">

        <div class="form-group">

            {!! Form::label('category', 'Module Category', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('category', $fields, null, array('class'=>'form-control', 'id'=>'category')) !!}

         </div>

        

      </div>

      <div class="col-md-4">

        <div class="form-group">

            {!! Form::label('parent_id', 'Module Category', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('parent_id', [''=>'Select Category']+$categories, null, array('class'=>'form-control', 'id'=>'parent_id')) !!}

         </div>

        

      </div>

      <div class="col-md-4">

        <div class="form-group">

            {!! Form::label('multiple_category', 'Multiple Categories', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('multiple_category', $fields, null, array('class'=>'form-control', 'id'=>'multiple_category')) !!}

         </div>

        

      </div>

     

      <div class="col-md-12">

        <div class="form-group">

            {!! Form::label('tags', 'Module Tags', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('tags', $fields, null, array('class'=>'form-control', 'id'=>'tags')) !!}

         </div>

        

      </div>

      

  </div>



   <div class="row">

      <div class="col-md-6">

        <div class="form-group">

            {!! Form::label('is_image', 'Module Image', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('is_image', $fields, null, array('class'=>'form-control', 'id'=>'is_image')) !!}

         </div>

        

      </div>



      <div class="col-md-6">

        <div class="form-group">

            {!! Form::label('multi_images', 'Multi Images', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('multi_images', $fields, null, array('class'=>'form-control', 'id'=>'multi_images')) !!}

         </div>

        

      </div>

      <div class="col-md-6 image_section">

         <div class="form-group">

            {!! Form::label('thumbnail_height', 'Thumbnail Height', ['class' => 'font-weight-bold']) !!}

            {!! Form::text('thumbnail_height', null, array('class'=>'form-control', 'id'=>'thumbnail_height', 'placeholder'=>'Thumbnail Height')) !!}

         </div>

      </div>

      <div class="col-md-6 image_section">

         <div class="form-group">

            {!! Form::label('thumbnail_width', 'Thumbnail Width', ['class' => 'font-weight-bold']) !!}

            {!! Form::text('thumbnail_width', null, array('class'=>'form-control', 'id'=>'thumbnail_width', 'placeholder'=>'Thumbnail Width')) !!}

         </div>

      </div>

   </div>

   <div class="row">

      <div class="col-md-12">

         <div class="form-group">

            @php

            $extra_fields = array(

                1 => 1,

                2 => 2,

                3 => 3,

                4 => 4,

                5 => 5,

                6 => 6,

                7 => 7,

                8 => 8,

                9 => 9,

                10 => 10,

                11 => 11,

                12 => 12,

                13 => 13,

                14 => 14,

                15 => 15

            );

            @endphp

            {!! Form::label('extra_fields', 'Extra Fields', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_fields', [''=>'Select Extra Fields']+$extra_fields, null, array('class'=>'form-control', 'id'=>'extra_fields')) !!}

         </div>

      </div>

   </div>
   @php
    $field_types = array(
        'text' => 'text',
        'textarea' => 'textarea',
        'number' => 'number',
        'select' => 'select',
        'date' => 'date',
    );
    @endphp
   <div class="row">


      <div class="col-md-12 extra_field_title" style="display: none;"><hr>
         <div class="form-group">
            {!! Form::label('extra_field_title_1', 'Extra Field Title 1', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_1', null, array('class'=>'form-control', 'id'=>'extra_field_title_1', 'placeholder'=>'Extra Field Title 1')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_1', 'Extra Field Type 1', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_1', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_1')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_1', 'Extra Field 1 Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_1', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_1')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_sort_1', 'Extra Field 1 Sort', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_sort_1', null, array('class'=>'form-control', 'id'=>'extra_field_sort_1', 'placeholder'=>'Extra Field 1 Sort')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_col_1', 'Extra Field 1 Col Class', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_col_1', null, array('class'=>'form-control', 'id'=>'extra_field_col_1', 'placeholder'=>'Extra Field 1 Col Class')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_max_length_1', 'Extra Field 1 Max Length', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_max_length_1', null, array('class'=>'form-control', 'id'=>'extra_field_max_length_1', 'placeholder'=>'Extra Field 1 Max Length')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_1', 'Is Extra Field 1 Required?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_required_1', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_required_1')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_message_1', 'Extra Field 1 Required Message', ['class' => 'font-weight-bold']) !!}

            {!! Form::text('extra_field_required_message_1', null, array('class'=>'form-control', 'id'=>'extra_field_required_message_1', 'placeholder'=>'Extra Field 1 Required Message')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_show_1', 'Is Extra Field 1 show?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_show_1', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_show_1')) !!}
         </div>
      </div>




      <div class="col-md-12 extra_field_title" style="display: none;"><hr>
         <div class="form-group">
            {!! Form::label('extra_field_title_2', 'Extra Field Title 2', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_2', null, array('class'=>'form-control', 'id'=>'extra_field_title_2', 'placeholder'=>'Extra Field Title 2')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_2', 'Extra Field Type 2', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_2', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_2')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_2', 'Extra Field 2 Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_2', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_2')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_sort_2', 'Extra Field 2 Sort', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_sort_2', null, array('class'=>'form-control', 'id'=>'extra_field_sort_2', 'placeholder'=>'Extra Field 2 Sort')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_col_2', 'Extra Field 2 Col Class', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_col_2', null, array('class'=>'form-control', 'id'=>'extra_field_col_2', 'placeholder'=>'Extra Field 2 Col Class')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_max_length_2', 'Extra Field 2 Max Length', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_max_length_2', null, array('class'=>'form-control', 'id'=>'extra_field_max_length_2', 'placeholder'=>'Extra Field 2 Max Length')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_2', 'Is Extra Field 2 Required?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_required_2', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_required_2')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_2', 'Extra Field 2 Required Message', ['class' => 'font-weight-bold']) !!}

            {!! Form::text('extra_field_required_message_2', null, array('class'=>'form-control', 'id'=>'extra_field_required_message_2', 'placeholder'=>'Extra Field 2 Required Message')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_show_2', 'Is Extra Field 2 show?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_show_2', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_show_2')) !!}
         </div>
      </div>




            <div class="col-md-12 extra_field_title" style="display: none;"><hr>
         <div class="form-group">
            {!! Form::label('extra_field_title_3', 'Extra Field Title 3', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_3', null, array('class'=>'form-control', 'id'=>'extra_field_title_3', 'placeholder'=>'Extra Field Title 3')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_3', 'Extra Field Type 3', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_3', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_3')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_3', 'Extra Field 3 Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_3', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_3')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_sort_3', 'Extra Field 3 Sort', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_sort_3', null, array('class'=>'form-control', 'id'=>'extra_field_sort_3', 'placeholder'=>'Extra Field 3 Sort')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_col_3', 'Extra Field 3 Col Class', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_col_3', null, array('class'=>'form-control', 'id'=>'extra_field_col_3', 'placeholder'=>'Extra Field 3 Col Class')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_max_length_3', 'Extra Field 3 Max Length', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_max_length_3', null, array('class'=>'form-control', 'id'=>'extra_field_max_length_3', 'placeholder'=>'Extra Field 3 Max Length')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_3', 'Is Extra Field 3 Required?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_required_3', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_required_3')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_3', 'Extra Field 3 Required Message', ['class' => 'font-weight-bold']) !!}

            {!! Form::text('extra_field_required_message_3', null, array('class'=>'form-control', 'id'=>'extra_field_required_message_3', 'placeholder'=>'Extra Field 3 Required Message')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_show_3', 'Is Extra Field 3 show?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_show_3', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_show_3')) !!}
         </div>
      </div>




            <div class="col-md-12 extra_field_title" style="display: none;"><hr>
         <div class="form-group">
            {!! Form::label('extra_field_title_4', 'Extra Field Title 4', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_4', null, array('class'=>'form-control', 'id'=>'extra_field_title_4', 'placeholder'=>'Extra Field Title 4')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_4', 'Extra Field Type 4', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_4', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_4')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_4', 'Extra Field 4 Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_4', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_4')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_sort_4', 'Extra Field 4 Sort', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_sort_4', null, array('class'=>'form-control', 'id'=>'extra_field_sort_4', 'placeholder'=>'Extra Field 4 Sort')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_col_4', 'Extra Field 4 Col Class', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_col_4', null, array('class'=>'form-control', 'id'=>'extra_field_col_4', 'placeholder'=>'Extra Field 4 Col Class')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_max_length_4', 'Extra Field 4 Max Length', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_max_length_4', null, array('class'=>'form-control', 'id'=>'extra_field_max_length_4', 'placeholder'=>'Extra Field 4 Max Length')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_4', 'Is Extra Field 4 Required?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_required_4', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_required_4')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_4', 'Extra Field 4 Required Message', ['class' => 'font-weight-bold']) !!}

            {!! Form::text('extra_field_required_message_4', null, array('class'=>'form-control', 'id'=>'extra_field_required_message_4', 'placeholder'=>'Extra Field 4 Required Message')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_show_4', 'Is Extra Field 4 show?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_show_4', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_show_4')) !!}
         </div>
      </div>




            <div class="col-md-12 extra_field_title" style="display: none;"><hr>
         <div class="form-group">
            {!! Form::label('extra_field_title_5', 'Extra Field Title 5', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_5', null, array('class'=>'form-control', 'id'=>'extra_field_title_5', 'placeholder'=>'Extra Field Title 5')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_5', 'Extra Field Type 5', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_5', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_5')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_5', 'Extra Field 5 Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_5', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_5')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_sort_5', 'Extra Field 5 Sort', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_sort_5', null, array('class'=>'form-control', 'id'=>'extra_field_sort_5', 'placeholder'=>'Extra Field 5 Sort')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_col_5', 'Extra Field 5 Col Class', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_col_5', null, array('class'=>'form-control', 'id'=>'extra_field_col_5', 'placeholder'=>'Extra Field 5 Col Class')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_max_length_5', 'Extra Field 5 Max Length', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_max_length_5', null, array('class'=>'form-control', 'id'=>'extra_field_max_length_5', 'placeholder'=>'Extra Field 5 Max Length')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_5', 'Is Extra Field 5 Required?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_required_5', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_required_5')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_5', 'Extra Field 5 Required Message', ['class' => 'font-weight-bold']) !!}

            {!! Form::text('extra_field_required_message_5', null, array('class'=>'form-control', 'id'=>'extra_field_required_message_5', 'placeholder'=>'Extra Field 5 Required Message')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_show_5', 'Is Extra Field 5 show?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_show_5', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_show_5')) !!}
         </div>
      </div>




            <div class="col-md-12 extra_field_title" style="display: none;"><hr>
         <div class="form-group">
            {!! Form::label('extra_field_title_6', 'Extra Field Title 6', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_6', null, array('class'=>'form-control', 'id'=>'extra_field_title_6', 'placeholder'=>'Extra Field Title 6')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_6', 'Extra Field Type 6', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_6', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_6')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_6', 'Extra Field 6 Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_6', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_6')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_sort_6', 'Extra Field 6 Sort', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_sort_6', null, array('class'=>'form-control', 'id'=>'extra_field_sort_6', 'placeholder'=>'Extra Field 6 Sort')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_col_6', 'Extra Field 6 Col Class', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_col_6', null, array('class'=>'form-control', 'id'=>'extra_field_col_6', 'placeholder'=>'Extra Field 6 Col Class')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_max_length_6', 'Extra Field 6 Max Length', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_max_length_6', null, array('class'=>'form-control', 'id'=>'extra_field_max_length_6', 'placeholder'=>'Extra Field 6 Max Length')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_6', 'Is Extra Field 6 Required?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_required_6', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_required_6')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_6', 'Extra Field 6 Required Message', ['class' => 'font-weight-bold']) !!}

            {!! Form::text('extra_field_required_message_6', null, array('class'=>'form-control', 'id'=>'extra_field_required_message_6', 'placeholder'=>'Extra Field 6 Required Message')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_show_6', 'Is Extra Field 6 show?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_show_6', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_show_6')) !!}
         </div>
      </div>




           <div class="col-md-12 extra_field_title" style="display: none;"><hr>
         <div class="form-group">
            {!! Form::label('extra_field_title_7', 'Extra Field Title 7', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_7', null, array('class'=>'form-control', 'id'=>'extra_field_title_7', 'placeholder'=>'Extra Field Title 7')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_7', 'Extra Field Type 7', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_7', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_7')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_7', 'Extra Field 7 Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_7', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_7')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_sort_7', 'Extra Field 7 Sort', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_sort_7', null, array('class'=>'form-control', 'id'=>'extra_field_sort_7', 'placeholder'=>'Extra Field 7 Sort')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_col_7', 'Extra Field 7 Col Class', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_col_7', null, array('class'=>'form-control', 'id'=>'extra_field_col_7', 'placeholder'=>'Extra Field 7 Col Class')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_max_length_7', 'Extra Field 7 Max Length', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_max_length_7', null, array('class'=>'form-control', 'id'=>'extra_field_max_length_7', 'placeholder'=>'Extra Field 7 Max Length')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_7', 'Is Extra Field 7 Required?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_required_7', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_required_7')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_7', 'Extra Field 7 Required Message', ['class' => 'font-weight-bold']) !!}

            {!! Form::text('extra_field_required_message_7', null, array('class'=>'form-control', 'id'=>'extra_field_required_message_7', 'placeholder'=>'Extra Field 7 Required Message')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_show_7', 'Is Extra Field 7 show?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_show_7', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_show_7')) !!}
         </div>
      </div>




            <div class="col-md-12 extra_field_title" style="display: none;"><hr>
         <div class="form-group">
            {!! Form::label('extra_field_title_8', 'Extra Field Title 8', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_8', null, array('class'=>'form-control', 'id'=>'extra_field_title_8', 'placeholder'=>'Extra Field Title 8')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_8', 'Extra Field Type 8', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_8', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_8')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_8', 'Extra Field 8 Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_8', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_8')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_sort_8', 'Extra Field 8 Sort', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_sort_8', null, array('class'=>'form-control', 'id'=>'extra_field_sort_8', 'placeholder'=>'Extra Field 8 Sort')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_col_8', 'Extra Field 8 Col Class', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_col_8', null, array('class'=>'form-control', 'id'=>'extra_field_col_8', 'placeholder'=>'Extra Field 8 Col Class')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_max_length_8', 'Extra Field 8 Max Length', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_max_length_8', null, array('class'=>'form-control', 'id'=>'extra_field_max_length_8', 'placeholder'=>'Extra Field 8 Max Length')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_8', 'Is Extra Field 8 Required?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_required_8', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_required_8')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_8', 'Extra Field 8 Required Message', ['class' => 'font-weight-bold']) !!}

            {!! Form::text('extra_field_required_message_8', null, array('class'=>'form-control', 'id'=>'extra_field_required_message_8', 'placeholder'=>'Extra Field 8 Required Message')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_show_8', 'Is Extra Field 8 show?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_show_8', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_show_8')) !!}
         </div>
      </div>





      <div class="col-md-12 extra_field_title" style="display: none;"><hr>
         <div class="form-group">
            {!! Form::label('extra_field_title_9', 'Extra Field Title 9', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_9', null, array('class'=>'form-control', 'id'=>'extra_field_title_9', 'placeholder'=>'Extra Field Title 9')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_9', 'Extra Field Type 9', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_9', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_9')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_9', 'Extra Field 9 Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_9', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_9')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_sort_9', 'Extra Field 9 Sort', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_sort_9', null, array('class'=>'form-control', 'id'=>'extra_field_sort_9', 'placeholder'=>'Extra Field 9 Sort')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_col_9', 'Extra Field 9 Col Class', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_col_9', null, array('class'=>'form-control', 'id'=>'extra_field_col_9', 'placeholder'=>'Extra Field 9 Col Class')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_max_length_9', 'Extra Field 9 Max Length', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_max_length_9', null, array('class'=>'form-control', 'id'=>'extra_field_max_length_9', 'placeholder'=>'Extra Field 9 Max Length')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_9', 'Is Extra Field 9 Required?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_required_9', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_required_9')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_9', 'Extra Field 9 Required Message', ['class' => 'font-weight-bold']) !!}

            {!! Form::text('extra_field_required_message_9', null, array('class'=>'form-control', 'id'=>'extra_field_required_message_9', 'placeholder'=>'Extra Field 9 Required Message')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_show_9', 'Is Extra Field 9 show?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_show_9', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_show_9')) !!}
         </div>
      </div>




      <div class="col-md-12 extra_field_title" style="display: none;"><hr>
         <div class="form-group">
            {!! Form::label('extra_field_title_10', 'Extra Field Title 10', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_10', null, array('class'=>'form-control', 'id'=>'extra_field_title_10', 'placeholder'=>'Extra Field Title 10')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_10', 'Extra Field Type 10', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_10', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_10')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_10', 'Extra Field 10 Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_10', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_10')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_sort_10', 'Extra Field 10 Sort', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_sort_10', null, array('class'=>'form-control', 'id'=>'extra_field_sort_10', 'placeholder'=>'Extra Field 10 Sort')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_col_10', 'Extra Field 10 Col Class', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_col_10', null, array('class'=>'form-control', 'id'=>'extra_field_col_10', 'placeholder'=>'Extra Field 10 Col Class')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_max_length_10', 'Extra Field 10 Max Length', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_max_length_10', null, array('class'=>'form-control', 'id'=>'extra_field_max_length_10', 'placeholder'=>'Extra Field 10 Max Length')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_10', 'Is Extra Field 10 Required?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_required_10', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_required_10')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_10', 'Extra Field 10 Required Message', ['class' => 'font-weight-bold']) !!}

            {!! Form::text('extra_field_required_message_10', null, array('class'=>'form-control', 'id'=>'extra_field_required_message_10', 'placeholder'=>'Extra Field 10 Required Message')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_show_10', 'Is Extra Field 10 show?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_show_10', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_show_10')) !!}
         </div>
      </div>




      <div class="col-md-12 extra_field_title" style="display: none;"><hr>
         <div class="form-group">
            {!! Form::label('extra_field_title_11', 'Extra Field Title 11', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_11', null, array('class'=>'form-control', 'id'=>'extra_field_title_11', 'placeholder'=>'Extra Field Title 11')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_11', 'Extra Field Type 11', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_11', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_11')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_11', 'Extra Field 11 Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_11', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_11')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_sort_11', 'Extra Field 11 Sort', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_sort_11', null, array('class'=>'form-control', 'id'=>'extra_field_sort_11', 'placeholder'=>'Extra Field 11 Sort')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_col_11', 'Extra Field 11 Col Class', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_col_11', null, array('class'=>'form-control', 'id'=>'extra_field_col_11', 'placeholder'=>'Extra Field 11 Col Class')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_max_length_11', 'Extra Field 11 Max Length', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_max_length_11', null, array('class'=>'form-control', 'id'=>'extra_field_max_length_11', 'placeholder'=>'Extra Field 11 Max Length')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_11', 'Is Extra Field 11 Required?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_required_11', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_required_11')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_11', 'Extra Field 11 Required Message', ['class' => 'font-weight-bold']) !!}

            {!! Form::text('extra_field_required_message_11', null, array('class'=>'form-control', 'id'=>'extra_field_required_message_11', 'placeholder'=>'Extra Field 11 Required Message')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_show_11', 'Is Extra Field 11 show?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_show_11', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_show_11')) !!}
         </div>
      </div>




      <div class="col-md-12 extra_field_title" style="display: none;"><hr>
         <div class="form-group">
            {!! Form::label('extra_field_title_12', 'Extra Field Title 12', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_12', null, array('class'=>'form-control', 'id'=>'extra_field_title_12', 'placeholder'=>'Extra Field Title 12')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_12', 'Extra Field Type 12', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_12', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_12')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_12', 'Extra Field 12 Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_12', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_12')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_sort_12', 'Extra Field 12 Sort', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_sort_12', null, array('class'=>'form-control', 'id'=>'extra_field_sort_12', 'placeholder'=>'Extra Field 12 Sort')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_col_12', 'Extra Field 12 Col Class', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_col_12', null, array('class'=>'form-control', 'id'=>'extra_field_col_12', 'placeholder'=>'Extra Field 12 Col Class')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_max_length_12', 'Extra Field 12 Max Length', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_max_length_12', null, array('class'=>'form-control', 'id'=>'extra_field_max_length_12', 'placeholder'=>'Extra Field 12 Max Length')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_12', 'Is Extra Field 12 Required?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_required_12', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_required_12')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_12', 'Extra Field 12 Required Message', ['class' => 'font-weight-bold']) !!}

            {!! Form::text('extra_field_required_message_12', null, array('class'=>'form-control', 'id'=>'extra_field_required_message_12', 'placeholder'=>'Extra Field 12 Required Message')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_show_12', 'Is Extra Field 12 show?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_show_12', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_show_12')) !!}
         </div>
      </div>




      <div class="col-md-12 extra_field_title" style="display: none;"><hr>
         <div class="form-group">
            {!! Form::label('extra_field_title_13', 'Extra Field Title 13', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_13', null, array('class'=>'form-control', 'id'=>'extra_field_title_13', 'placeholder'=>'Extra Field Title 13')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_13', 'Extra Field Type 13', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_13', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_13')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_13', 'Extra Field 13 Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_13', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_13')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_sort_13', 'Extra Field 13 Sort', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_sort_13', null, array('class'=>'form-control', 'id'=>'extra_field_sort_13', 'placeholder'=>'Extra Field 13 Sort')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_col_13', 'Extra Field 13 Col Class', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_col_13', null, array('class'=>'form-control', 'id'=>'extra_field_col_13', 'placeholder'=>'Extra Field 13 Col Class')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_max_length_13', 'Extra Field 13 Max Length', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_max_length_13', null, array('class'=>'form-control', 'id'=>'extra_field_max_length_13', 'placeholder'=>'Extra Field 13 Max Length')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_13', 'Is Extra Field 13 Required?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_required_13', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_required_13')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_13', 'Extra Field 13 Required Message', ['class' => 'font-weight-bold']) !!}

            {!! Form::text('extra_field_required_message_13', null, array('class'=>'form-control', 'id'=>'extra_field_required_message_13', 'placeholder'=>'Extra Field 13 Required Message')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_show_13', 'Is Extra Field 13 show?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_show_13', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_show_13')) !!}
         </div>
      </div>




      <div class="col-md-12 extra_field_title" style="display: none;"><hr>
         <div class="form-group">
            {!! Form::label('extra_field_title_14', 'Extra Field Title 14', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_14', null, array('class'=>'form-control', 'id'=>'extra_field_title_14', 'placeholder'=>'Extra Field Title 14')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_14', 'Extra Field Type 14', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_14', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_14')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_14', 'Extra Field 14 Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_14', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_14')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_sort_14', 'Extra Field 14 Sort', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_sort_14', null, array('class'=>'form-control', 'id'=>'extra_field_sort_14', 'placeholder'=>'Extra Field 14 Sort')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_col_14', 'Extra Field 14 Col Class', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_col_14', null, array('class'=>'form-control', 'id'=>'extra_field_col_14', 'placeholder'=>'Extra Field 14 Col Class')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_max_length_14', 'Extra Field 14 Max Length', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_max_length_14', null, array('class'=>'form-control', 'id'=>'extra_field_max_length_14', 'placeholder'=>'Extra Field 14 Max Length')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_14', 'Is Extra Field 14 Required?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_required_14', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_required_14')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_14', 'Extra Field 14 Required Message', ['class' => 'font-weight-bold']) !!}

            {!! Form::text('extra_field_required_message_14', null, array('class'=>'form-control', 'id'=>'extra_field_required_message_14', 'placeholder'=>'Extra Field 14 Required Message')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_show_14', 'Is Extra Field 14 show?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_show_14', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_show_14')) !!}
         </div>
      </div>




      <div class="col-md-12 extra_field_title" style="display: none;"><hr>
         <div class="form-group">
            {!! Form::label('extra_field_title_15', 'Extra Field Title 15', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_15', null, array('class'=>'form-control', 'id'=>'extra_field_title_15', 'placeholder'=>'Extra Field Title 15')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_15', 'Extra Field Type 15', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_15', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_15')) !!}
         </div>
      </div>
      <div class="col-md-6 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_15', 'Extra Field 15 Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_15', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_15')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_sort_15', 'Extra Field 15 Sort', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_sort_15', null, array('class'=>'form-control', 'id'=>'extra_field_sort_15', 'placeholder'=>'Extra Field 15 Sort')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_col_15', 'Extra Field 15 Col Class', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_col_15', null, array('class'=>'form-control', 'id'=>'extra_field_col_15', 'placeholder'=>'Extra Field 15 Col Class')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_max_length_15', 'Extra Field 15 Max Length', ['class' => 'font-weight-bold']) !!}
            {!! Form::number('extra_field_max_length_15', null, array('class'=>'form-control', 'id'=>'extra_field_max_length_15', 'placeholder'=>'Extra Field 15 Max Length')) !!}
         </div>
      </div>


      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_15', 'Is Extra Field 15 Required?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_required_15', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_required_15')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_required_15', 'Extra Field 15 Required Message', ['class' => 'font-weight-bold']) !!}

            {!! Form::text('extra_field_required_message_15', null, array('class'=>'form-control', 'id'=>'extra_field_required_message_15', 'placeholder'=>'Extra Field 15 Required Message')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
             {!! Form::label('extra_field_show_15', 'Is Extra Field 15 show?', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_field_show_15', $fields, null, array('class'=>'form-control', 'id'=>'extra_field_show_15')) !!}
         </div>
      </div>



      



      
   </div>

  



@push('js')



<script type="text/javascript">

   extrafields("{{old('extra_fields', (isset($module))? $module->extra_fields:'')}}");
    $('#extra_fields').on('change',function(){
        extrafields($(this).val());
    })
    function extrafields(val){
        $('.extra_field_title').hide();
        for (var i = 1; i <= val; i++) {
            $('#extra_field_title_'+i).parent().parent().show(); 
            $('#extra_field_type_'+i).parent().parent().show(); 
            $('#extra_field_attr_'+i).parent().parent().show(); 
            $('#extra_field_sort_'+i).parent().parent().show(); 
            $('#extra_field_col_'+i).parent().parent().show(); 
            $('#extra_field_max_length_'+i).parent().parent().show(); 
            $('#extra_field_required_'+i).parent().parent().show(); 
            $('#extra_field_required_message_'+i).parent().parent().show(); 
            $('#extra_field_show_'+i).parent().parent().show(); 
        }
    }


    show_thumb("{{old('is_image', (isset($module))? $module->is_image:'')}}");

    $('#is_image').on('change',function(){

        show_thumb($(this).val());

    })



    function show_thumb(val){

        if(val==1){

            $('.image_section').show();

        }else{

            $('.image_section').hide();

        }

    }





</script>



@endpush