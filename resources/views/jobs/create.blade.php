<x-layout>
    <x-page-heading>
        Create a Job
    </x-page-heading>

    <x-forms.form action="/jobs" method="POST">
        @csrf
        @method('POST')
        <x-forms.input name="title" label="Title" placeholder="CEO" />
        <x-forms.input name="salary" label="Salary" placeholder="$90,000 USD" />
        <x-forms.input name="location" label="Location" placeholder="Winter Park, Florida" />
        <x-forms.select name="schedule" label="Schedule">
            <option>Part time</option>
            <option>Full time</option>
        </x-forms.select>
        <x-forms.input name="url" label="URL" placeholder="https://acme.com/jobs/ceo-wanted" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input name="tags" label="Tags (comma seperated)" placeholder="coding, video, education" />


        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>



</x-layout>
