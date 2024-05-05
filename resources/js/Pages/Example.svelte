<script>
    import { onMount } from 'svelte';
    let aboutInfo = [];
    onMount(async () => {
         const response = await fetch('/aboutInfo');
         aboutInfo = await response.json();
         console.log(aboutInfo)
    });
</script>


 <div>
    <div class="container">
        <h1>Welcome to IT Dates GmbH – Your Partner in Advanced IT Solutions for the </h1>
    </div>
    {#if aboutInfo.data && aboutInfo.data.length > 0}
  {#each aboutInfo.data as info}
    <div>
      <h2>{info.title}</h2>
      <p>{info.content??''}</p>
      {#if info.about_sub_infos && info.about_sub_infos.length > 0}
        <ul>
          {#each info.about_sub_infos as subInfo}
            <li>{subInfo.title}: {subInfo.content}</li>
          {/each}
        </ul>
      {/if}
    </div>
  {/each}
{:else}
  <p>Loading...</p>
{/if}

 </div>

