@aware(['error'])

@props(['error'=> null])

<textarea {{$attributes->class(['h-auto w-full border p-5 rounded-lg',
            'border-primary-500' => !$error,
            'border-red-500' => $error,
            ])}}></textarea>
