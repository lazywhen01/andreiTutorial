<div>
    <!-- Tab Navigation -->
    <div class="flex space-x-4 border-b">
        <button 
            class="px-4 py-2 border-b-2"
            :class="$activeTab === 'tab1' ? 'border-blue-500' : 'border-transparent'"
            wire:click="setActiveTab('tab1')">
            Tab 1
        </button>
        <button 
            class="px-4 py-2 border-b-2"
            :class="$activeTab === 'tab2' ? 'border-blue-500' : 'border-transparent'"
            wire:click="setActiveTab('tab2')">
            Tab 2
        </button>
        <button 
            class="px-4 py-2 border-b-2"
            :class="$activeTab === 'tab3' ? 'border-blue-500' : 'border-transparent'"
            wire:click="setActiveTab('tab3')">
            Tab 3
        </button>
    </div>

    <!-- Tab Content -->
    <div class="mt-4">
        @if ($activeTab === 'tab1')
            <div>
                <h2 class="text-lg font-semibold">Tab 1 Content</h2>
                <p>This is the content for Tab 1.</p>
            </div>
        @elseif ($activeTab === 'tab2')
            <div>
                <h2 class="text-lg font-semibold">Tab 2 Content</h2>
                <p>This is the content for Tab 2.</p>
            </div>
        @elseif ($activeTab === 'tab3')
            <div>
                <h2 class="text-lg font-semibold">Tab 3 Content</h2>
                <p>This is the content for Tab 3.</p>
            </div>
        @endif
    </div>
</div>
